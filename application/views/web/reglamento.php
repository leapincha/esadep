   <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="crumbs secciones">
                            <div class="crumbs-text">
                                 Salvamento Deportivo » 
                                <a href="">Reglamento</a>
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
	                <div class="col-sm-12 about-us-text">


                        <?php foreach($reglamento as $reglament): ?>  
            
                        <div><?php echo $reglament->descripcion; ?></div>
            
                        
                        
                        <p>
	                	<a class="btn btn-lg btn-primary" href="/assets/web/files/reglamento/<?php echo $reglament->reglamento; ?>" download="<?php echo $reglament->reglamento; ?>">Descargar Reglamento</a>
						</p>

                        <?php endforeach ?>
	                    
	                </div>
	            </div>
	        </div>
        </div>