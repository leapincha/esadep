   <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="crumbs secciones">
                            <div class="crumbs-text">
                                 Salvamento Deportivo » 
                                <a href="">Definición</a>
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
			
						<div><?php echo $hist->descripcion; ?></div>
			
						<?php endforeach ?>
	                    
						
	                    
	                </div>
	            </div>
	        </div>
        </div>