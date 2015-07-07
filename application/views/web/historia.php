   <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                         
                        <div class="crumbs">
                            <div class="crumbs-text">
                                  ESADEP » 
                                <a href=""><? echo $titulo; ?></a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us-text wow fadeInLeft">

	                	<?php foreach($historia as $hist): ?>	
			
						<div><?php echo $hist->historia; ?></div>
			
						<?php endforeach ?>
	                    
						
	                    
	                </div>
	            </div>
	        </div>
        </div>