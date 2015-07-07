<div class="portfolio-container">
	        <div class="container">
	        	
	            <div class="row">
	              <section class="col-md-9">
	              	<div class="row">
		            	<div class="col-sm-12 work-title wow fadeIn">
		                	<h2><? echo $title; ?></h2>
		            	</div>
	            	</div>
	              	
	           			<?php
	           				$i=0;

	           				

		       			foreach($results as $data) { 
								if($i%3==0){ ?>
	            					<div class="row">
	            			
	            			<?php $j=0; }
								?>
								<div class="col-sm-4">
									<? $j++; 
									if ($i%2==0){ ?>
										<div class="work wow fadeInUp">
																		
											<? }else { ?>
										<div class="work wow fadeInDown">
									<? } ?>
									
										<img src="/assets/web/images/noticias/<?php echo $data->foto; ?>" alt="<?php echo $data->titulo; ?>">
										<h3><?php echo $data->titulo; ?></h3>
										<?php echo $data->copete; ?>...</p>
										<div class="work-bottom">
											<a class="big-link-2 view-work" href="/assets/web/images/noticias/<?php echo $data->foto; ?>"><i class="fa fa-search"></i></a>
											<a class="big-link-2" href="<?= base_url(); ?>noticia/ver/<?php echo $data->id_noticia; ?>"><i class="fa fa-link"></i></a>
										</div>
    								
    							</div>

    							</div>
    							<?php 
								if($j==3){ ?>
									
	            			</div>
	            			
	            			<?php }

	            			
	            				
								$i++; } ?>

								<?php
								
								if($i<=3 or $cantidad_total>6){ 

									?>


								
							
									
							<?php	}
								
							 if($cantidad_total>6 and $i<6) {  if($i==3) { ?>

 
							 	<div class="row">
		            	

		            			<p><?php echo $links; ?></p>

		            			</div>	
		            		<?php  	
							 }  else{ ?>
							 	
							 </div>
								

							<div class="row">
		            	

		            		<p><?php echo $links; ?></p>

		            		</div>	

							<?php } ?>
								


	            			<?php } elseif($cantidad_total>6 and $i=6) {  ?>
	            			
	            			<div class="row">
		            	

		            		<p><?php echo $links; ?></p>

		            		</div>	

		            		<?php 
	            			} ?>

				
		            
   						

		            

		            
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



		            


	            
	            

       