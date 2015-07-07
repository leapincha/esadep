<div class="portfolio-container">
	<div class="container">
		<div class="row">


			<section class="col-md-9">

				

				<div class="nota-heading">
					<h1><?php echo $serv->nombre_servicio; ?></h1>
										
				<hr>
				</div>
				<img alt="" src="/assets/web/images/servicios/<?php echo $serv->foto ?>" class="img-responsive servicios-foto">
				<hr>
				<div class="desarrollo-nota">
					<p><?php echo $serv->descripcion; ?></p>


				</div>



				

			</section>


			<aside class="col-md-3 eventos">
				<div class="widget-category">

                    		<h4>Otros Servicios</h4>


                </div>
                <ul class="circled">
									<?php if($serv->id_servicio==1){ ?>
									<li><a href="<?php base_url(); ?>alquiler_material">Alquiler de Material</a></li>
									<li><a href="<?php base_url(); ?>seguridad_acuatica">Seguridad Acuática</a></li>

									<?php } elseif($serv->id_servicio==2){ ?>

									<li><a href="<?php base_url(); ?>capacitacion">Capacitación</a></li>
									<li><a href="<?php base_url(); ?>seguridad_acuatica">Seguridad Acuática</a></li>

									<?php } elseif($serv->id_servicio==3){ ?>

									<li><a href="<?php base_url(); ?>capacitacion">Capacitación</a></li>
									<li><a href="<?php base_url(); ?>alquiler_material">Alquiler de Material</a></li>
									
									<?php } ?>

				</ul>
				

			</aside>





		</div>


	</div>

</div>