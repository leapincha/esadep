        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn titulo">
                        
                        
                        <div class="crumbs">
                            <div class="crumbs-text">
                                  <? echo $titulo; ?> » 
                                <a href="">¿Qùienes Somos?</a>
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
	                    <?php foreach($quienes as $quien): ?>	
			
						<div><?php echo $quien->quienes; ?></div>
			
						<?php endforeach ?>

	                    
	                </div>
	            </div>
	        </div>
        </div>