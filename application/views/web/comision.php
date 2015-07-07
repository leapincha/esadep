 <!-- Meet Our Team -->
        <div class="team-container">
        	<div class="container">
	            <div class="row">
		            <div class="col-sm-12 team-title wow fadeIn">
		                <h2><? echo $titulo?></h2>
		            </div>
	            </div>
	            
	            	<?php $i=0; ?>	
	            	<?php foreach($comision as $comis): 
	            		if($i%4==0){?>
	            		<div class="row">
	            			
	            	<?	}
	            	?>
	            	 
						<div class="col-sm-3">
							<? if ($i%2==0){ ?>
							<div class="team-box wow fadeInDown">								
							<? }else { ?>
							<div class="team-box wow fadeInUp">
							<? } ?>
						<img src="/assets/web/images/comision_directiva/<?echo $comis->file_url;?>" alt="">
						<h3><?php echo $comis->nombre_apellido; ?></h3>
						<?php echo $comis->descripcion ?>
							</div>
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