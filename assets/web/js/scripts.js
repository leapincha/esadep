
jQuery(document).ready(function() {
	
	/*
	    Wow
	*/
	new WOW().init();
	
	/*
	    Slider
	*/
	$('.flexslider').flexslider({
        animation: "slide",
        controlNav: true,
        prevText: "",
        nextText: ""
    });
	
	/*
	    Slider 2
	*/
	$('.slider-2-container').backstretch([
	  "assets/img/slider/5.jpg"
	, "assets/img/slider/6.jpg"
	, "assets/img/slider/7.jpg"
	], {duration: 3000, fade: 750});
	
	/*
	    Image popup (home latest work)
	*/
	$('.view-work').magnificPopup({
		type: 'image',
		gallery: {
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: 'The image could not be loaded.',
			titleSrc: function(item) {
				return item.el.parent('.work-bottom').siblings('img').attr('alt');
			}
		},
		callbacks: {
			elementParse: function(item) {
				item.src = item.el.attr('href');
			}
		}
	});
	
	/*
	    Flickr feed
	*/
	$('.flickr-feed').jflickrfeed({
        limit: 8,
        qstrings: {
            id: '52617155@N08'
        },
        itemTemplate: '<a href="{{link}}" target="_blank" rel="nofollow"><img src="{{image_s}}" alt="{{title}}" /></a>'
    });
	
	/*
	    Google maps
	*/
	var position = new google.maps.LatLng(45.067883, 7.687231);
    $('.map').gmap({'center': position,'zoom': 15, 'disableDefaultUI':true, 'callback': function() {
            var self = this;
            self.addMarker({'position': this.get('map').getCenter() });	
        }
    });
    
    /*
	    Subscription form
	*/
	$('.success-message').hide();
	$('.error-message').hide();
	
	$('.footer-box-text-subscribe form').submit(function(e) {
		e.preventDefault();
		
		var form = $(this);
	    var postdata = form.serialize();
	    
	    $.ajax({
	        type: 'POST',
	        url: 'assets/subscribe.php',
	        data: postdata,
	        dataType: 'json',
	        success: function(json) {
	            if(json.valid == 0) {
	                $('.success-message').hide();
	                $('.error-message').hide();
	                $('.error-message').html(json.message);
	                $('.error-message').fadeIn();
	            }
	            else {
	                $('.error-message').hide();
	                $('.success-message').hide();
	                form.hide();
	                $('.success-message').html(json.message);
	                $('.success-message').fadeIn();
	            }
	        }
	    });
	});
    

	
});


jQuery(window).load(function() {
	
	/*
	    Portfolio
	*/
	$('.portfolio-masonry').masonry({
		columnWidth: '.portfolio-box', 
		itemSelector: '.portfolio-box',
		transitionDuration: '0.2s'
	});
	
	$('.portfolio-filters a').on('click', function(e){
		e.preventDefault();
		if(!$(this).hasClass('active')) {
	    	$('.portfolio-filters a').removeClass('active');
	    	var clicked_filter = $(this).attr('class').replace('filter-', '');
	    	$(this).addClass('active');
	    	if(clicked_filter != 'all') {
	    		$('.portfolio-box:not(.' + clicked_filter + ')').css('display', 'none');
	    		$('.portfolio-box:not(.' + clicked_filter + ')').removeClass('portfolio-box');
	    		$('.' + clicked_filter).addClass('portfolio-box');
	    		$('.' + clicked_filter).css('display', 'block');
	    		$('.portfolio-masonry').masonry();
	    	}
	    	else {
	    		$('.portfolio-masonry > div').addClass('portfolio-box');
	    		$('.portfolio-masonry > div').css('display', 'block');
	    		$('.portfolio-masonry').masonry();
	    	}
		}
	});
	
	$(window).on('resize', function(){ $('.portfolio-masonry').masonry(); });
	
	
	
});
