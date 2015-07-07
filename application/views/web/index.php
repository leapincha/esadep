
        <!-- Slider -->
        <div class="slider-container" id="fondo">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-sm-8 slider">
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
                    </section>

                    <aside class="col-sm-4 eventos">
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
                    	

                    	
                    </aside>
                </div>
            </div>
        </div>



		


<script type="text/javascript">

            $.backstretch("http://dl.dropbox.com/u/515046/www/garfield-interior.jpg");
</script>
