<div class="portfolio-container">
	<div class="container">
		<div class="row">


			<section class="col-md-9">

				

				<div class="nota-heading">
					<h1>Equipos ESADEP</h1>
					<p class="lead"></p>
					
					
				<hr>
				</div>
				<img alt="" src="/assets/web/images/categorias/esadep.jpg" class="img-responsive">
				<hr>
				<div class="desarrollo-nota">


                
                <?php	foreach ($equipo as $equip){ ?>
                <div id="<?php echo $equip->id_equipo ?>">
                	<h3><?php echo $equip->nombre_equipo; ?></h3>
					<p><?php echo $equip->descripcion; ?></p>

				</div>


				<?php	}   ?> 

				</div>



				

			</section>


			<aside class="col-md-3 eventos">

				<div class="widget-category">

                    		<h4>Más de ESADEP</h4>

                 </div>

                    	<ul class="circled">
									
            						<li> <a href="<?= base_url(); ?>quienes-somos">¿Quiénes Somos?</a> </li>
            						<li> <a href="<?= base_url(); ?>historia">Historia</a> </li>
            						<li> <a href="<?= base_url(); ?>comision-directiva">Comisión Directiva</a> </li>
            						
						</ul>


			</aside>





		</div>


	</div>

</div>