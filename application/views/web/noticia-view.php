<div class="portfolio-container">
	<div class="container">
		<div class="row">


			<section class="col-md-9">

				

				<div class="nota-heading">
					<h1><?php echo $notici->titulo; ?></h1>
					<p class="lead"><?php echo $notici->copete; ?></p>


    				<?php
    //formato fecha americana
    					$fecha1= $notici->fecha;;
    					$fecha2=date("d-m-Y",strtotime($fecha1));
    //El nuevo valor de la variable: $fecha2="20-10-2008"
    					
    				?>


					<p><span class="glyphicon glyphicon-time"></span>  <?php echo $fecha2; ?></p>
					
				<hr>
				</div>
				<img alt="" src="/assets/web/images/noticias/<?php echo $notici->foto ?>" class="img-responsive">
				<hr>
				<div class="desarrollo-nota">
					<p><?php echo $notici->desarrollo; ?></p>


				</div>

				<div class="nota-documento">
					<p><?php echo $notici->documento; ?></p>

				</div>

				

			</section>


			<aside class="col-md-3 eventos">

				<div class="widget-category">

                    		<h4>Categorìas</h4>

                 </div>

                    	<ul class="circled">
									<?php foreach ($categorias as $categoria){ ?>
            						<li> <a href="<?= base_url(); ?>noticia/tipo/<?php echo $categoria->id_categoria; ?>"> <?= $categoria->categoria; ?> </a> </li>
            						<?php }?>
						</ul>


			</aside>





		</div>


	</div>

</div>