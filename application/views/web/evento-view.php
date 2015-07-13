<div class="portfolio-container">
	<div class="container">
		<div class="row">


			<section class="col-md-9">

				

				<div class="nota-heading">
					<h1><?php echo $events->nombre; ?></h1>
					


    				<?php
    //formato fecha americana
    					$fecha1= $events->fecha;;
    					$fecha2=date("d-m-Y",strtotime($fecha1));
    //El nuevo valor de la variable: $fecha2="20-10-2008"
    					
    				?>


					<p><span class="glyphicon glyphicon-time"></span>  <?php echo $fecha2; ?></p>
					
				<hr>
				</div>
				<img alt="" src="/assets/web/images/eventos/<?php echo $events->foto ?>" class="img-responsive">
				<hr>
				<div class="desarrollo-nota">
					<p><?php echo $events->descripcion; ?></p>


				</div>



				

			</section>


			<aside class="col-md-3 eventos">

	


			</aside>





		</div>


	</div>

</div>