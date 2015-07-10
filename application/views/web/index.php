
        <!-- Slider -->
        <div class="slider-container" id="fondo">
            <div class="container-fluid">
                
                    <div class="col-sm-8 slider">
                     <div class="row">
                        <div class="flexslider">
                            <ul class="slides">

                            	<?php 
                				foreach ($noticias as $noti){ ?>

								<li data-thumb="/assets/web/images/noticias/<?php echo $noti->foto; ?>">
									<a href="<?= base_url(); ?>noticia/ver/<?php echo $noti->id_noticia; ?>"><img src="/assets/web/images/noticias/<?php echo $noti->foto; ?>">
									<div class="flex-caption">
										<h5><?php echo $noti->titulo; ?></h5>
										<?php echo $noti->copete; ?>...
									</div>
                                    </a>
								</li>
                				



                				<?php	}
                    				
            					?> 
                                
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="thumbnail">
                                    <img src="/assets/web/images/categorias/kids.jpg" alt="...">
                                    <div class="caption">
                                        <h3>KIDS</h3>
                                        <p>Son niños que ya poseen conocimientos de natación y fomentamos en ellos el salvamento en edades tempranas</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="thumbnail">
                                    <img src="/assets/web/images/categorias/juveniles.jpg" alt="...">
                                    <div class="caption">
                                        <h3>JUVENILES</h3>
                                        <p>Jóvenes adolescentes que ya incursionan en el ámbito del salvamento y anhelan ser guardavidas en algún momento</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                                    </div>
                                </div>

                            </div>
                    </div>
                                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="/assets/web/images/categorias/masters.jpg" alt="...">
                                    <div class="caption">
                                        <h3>MASTERS</h3>
                                        <p>Ellos suelen venir a contagiarse de la energía que hay en el equipo pero son los que más aportan ya que nos transmiten toda su experiencia y valores de vida</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                             <div class="thumbnail">
                                    <img src="/assets/web/images/categorias/absoluto.jpg" alt="...">
                                    <div class="caption">
                                        <h3>ABSOLUTO</h3>
                                        <p>Son todos aquellos guardavidas y/o interesados en el Salvamento Acuático en cualquiera de sus facetas. Por la edad que comprenden suelen ser considerados como la categoría mas fuerte.</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                             <div class="thumbnail">
                                    <img src="/assets/web/images/categorias/alto_rendimiento.jpg" alt="...">
                                    <div class="caption">
                                        <h3>ALTO RENDIMIENTO</h3>
                                        <p>Preparamos deportistas que deseen desempeñarse al máximo y destacarse en esta disciplina</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                       


                        

                    </div>



                    <div class="col-sm-4 eventos">
                    	<div class="widget-header">
                    		<i class="fa fa-calendar-o icono fa-2x"></i><h4>Próximos Eventos</h4>

                    	</div>
                    	

                    	<ul class="event-list">

                    		<?php 
                				foreach ($eventos as $event){ ?>
                					<li class="fechas">
                						<div class="icon-overlay"> 
                							<a href="<?= base_url(); ?>evento/ver/<?php echo $event->id_evento; ?>">
                								<img src="/assets/web/images/eventos/<?php  echo $event->foto;?>" alt="" /> 
                							</a> 
                						</div>
                							<div class="meta">
                  								<h6><a href="<?= base_url(); ?>evento/ver/<?php echo $event->id_evento; ?>"><?php echo $event->nombre; ?></a></h6>
                  								<em><?php 
                  										$dia=$event->fecha;
                  										$mes = substr($dia, -5, 2);
                  										$numero = substr($dia, -2);
                  										$nombre = nombremes($mes);
                  										echo $numero." ".$nombre; 
                  								?></em> 
                  							</div>
                					</li>
                					<hr>
                			<?php	}
                    				
            				?>    				
                		              					
              				
              				
            			</ul>
           	 <!-- /.post-list --> 


           	 			<div class="widget-header">
                    		<i class="fa fa-life-ring icono fa-2x"></i><h4>Ellos nos acompañan</h4>

                    	</div>

                    	<?php 
                				foreach ($sponsors as $spon){ ?>

                    	<div class="foto-banner">
                    		<a href="<?php echo $spon->link_web; ?>" target="_blank"><img src="/assets/web/images/sponsors/<?php echo $spon->foto; ?>"></a>

                    	</div>

                    	<?php	}
                    				
            				?>    		
                    	

                    	
                    </div>

                     


                
            </div>
        </div>



		


<script type="text/javascript">

            $.backstretch("http://dl.dropbox.com/u/515046/www/garfield-interior.jpg");
</script>
