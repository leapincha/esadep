
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
                    <br>
                    <hr>
                    <div class="equipos eventos">

                    <div class="widget-header">
                    <h4>EQUIPOS DE ESADEP</h4>

                    </div>
                    <br>
                        <?php 
                        $i=1;
                        foreach ($equipo as $equip){ 

                        if($i==1 || $i==3){ ?>
                        <div class="row">


                      <?php   } 
                        if($i==1 || $i==2){ ?>
                        <div class="col-sm-6 col-md-6">
                                <div class="thumbnail">
                                    <img src="/assets/web/images/categorias/<?php echo $equip->foto; ?>" alt="...">
                                    <div class="caption">
                                        <h3><?php echo $equip->nombre_equipo; ?></h3>
                                        <p><?php echo $equip->descripcion; ?></p>
                                        
                                    </div>
                                </div>

                            </div>
                      <?php    } else { ?>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="/assets/web/images/categorias/<?php echo $equip->foto; ?>" alt="...">
                                    <div class="caption">
                                        <h3><?php echo $equip->nombre_equipo; ?></h3>
                                        <p><?php echo $equip->descripcion; ?></p>
                                        
                                    </div>
                                </div>

                            </div>

                    <?php
                      }
                      ?>


                     <?php if ($i==2 || $i==5){ ?>
                 </div>

                    <?php }
                    $i++;
                    }

                         ?>

                    
                            

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
