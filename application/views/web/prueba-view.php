<div class="portfolio-container">
	<div class="container">

		<div class="row">
	        		<div class="col-sm-12">
	        			<div class="crumbs">
	        				<div class="crumbs-text">
	        					 Salvamento Deportivo » Pruebas » 
	        					<a href="<?= base_url(); ?>pruebas/tipo/<?php echo $sub_active; ?>"><?php echo $sub_active; ?></a>
	        				</div>
	        			</div>
	        		</div>
	        	</div>	
		<div class="row">

			<section class="col-md-9">

				<div class="nota-heading">
					<h1><?php echo $prueba->nombre_prueba; ?></h1>
					<p class="lead"><?php echo $prueba->introduccion; ?></p>

				</div>

				<hr>

				<img alt="" src="/assets/web/images/pruebas/<?php echo $sub_active; ?>/<?php echo $prueba->foto; ?>" class="img-responsive">

				<hr>
				<div class="desarrollo-nota">
					<p><?php echo $prueba->descripcion; ?></p>


				</div>

				<div class="nota-documento">

					<a class="link-facebook" href="<?php echo $prueba->link_galeriafb; ?>" target="_blank"><p>Link Galería De fotos Facebook</p></a>
					

				</div>


				<?php if($prueba->youtube==""){

				} else{ ?>
				
				<div class="embed-responsive embed-responsive-16by9">
    				<iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $prueba->youtube; ?>"></iframe>
    			</div>

    			<?php } ?>
			</section>

		</div>
	</div>
</div>