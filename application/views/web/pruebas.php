 <div class="portfolio-container">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-12">
	        			<div class="crumbs">
	        				<div class="crumbs-text">
	        					 Salvamento Deportivo » Pruebas » 
	        					<a href=""><?php echo $sub_active; ?></a>
	        				</div>
	        			</div>
	        		</div>
	        	</div>	
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<a href="#" class="filter-all active">TODAS</a> / 
	            		<a href="#" class="filter-Individuales">INDIVIDUALES</a> / 
	            		<a href="#" class="filter-Grupales">GRUPALES</a>
	               	</div>
	            </div>
	            
	            	
	           <?php $i=0; ?>
	            <?php	foreach($individuales as $data):   
	            	if($i%4==0){?>
	            		<div class="row">
	            			
	            	<?	}
	            	?>
	               <div class="col-sm-3 portfolio-masonry">
	               	<a href="<?= base_url(); ?>pruebas/ver/<?php echo $sub_active; ?>/<?php echo $data->id_prueba; ?>">
	            	<div class="portfolio-box <?php echo $data->tipo_prueba;?>">
	            		
	            		<div class="portfolio-box-container">
	            			
	            			<img src="/assets/web/images/pruebas/<?php echo $sub_active; ?>/<?php echo $data->foto; ?>">
	            			<div class="portfolio-box-text">
			                	<h3><?php echo $data->nombre; ?></h3>
			                	<p><?php echo $data->intro; ?></p>
			            	</div>
			            	
			        	</div>
	            
			        	
	            	</div>
	            	</a>
	               </div>
	            <? if($i==3){?>
						</div>
					<? } elseif($i==7){?>
						</div>
					<? } elseif($i==11){?>
						</div>
					<? } ?>
					<? $i++; ?>
				        
				<?php endforeach ?>
				</div>

				<?php $i=0; ?>
	            <?php	foreach($grupales as $datos):   
	            	if($i%4==0){?>
	            		<div class="row">
	            			
	            	<?	}
	            	?>
	               <div class="col-sm-3 portfolio-masonry">
	               	<a href="<?= base_url(); ?>pruebas/ver/<?php echo $sub_active; ?>/<?php echo $data->id_prueba; ?>">
	            	<div class="portfolio-box <?php echo $datos->tipo_prueba;?>">
	            		
	            		<div class="portfolio-box-container">
	            			<img src="/assets/web/images/pruebas/<?php echo $sub_active; ?>/<?php echo $datos->foto; ?>" alt="" data-at2x="/assets/web/images/pruebas/<?php echo $sub_active; ?>/<?php echo $datos->foto; ?>">
	            			<div class="portfolio-box-text">
			                	<h3><?php echo $datos->nombre; ?></h3>
			                	<p><?php echo $data->intro; ?></p>
			            	</div>
			        	</div>
			        	
	            

	            	</div>
	            	</a>
	               </div>
	            <? if($i==3){?>
						</div>
					<? } elseif($i==7){?>
						</div>
					<? } elseif($i==11){?>
						</div>
					<? } ?>
					<? $i++; ?>
				        
				<?php endforeach ?>
	            	
		               
	              
	        </div>

	        </div>
        </div>
