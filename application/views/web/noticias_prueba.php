<div class="portfolio-container">
	<div class="container">
		<div class="row">
			<section class="col-md-9">
				
				<?php
					$i=0;


					foreach($results as $data) {
						
						
						
						if($i==0 or $i==3){ $j=1;
							
							?>
						<div class="row">


						<?php }  ?>

				<div class="col-sm-4">
					<div class="work wow fadeInUp">
						<a href="<?= base_url(); ?>noticia/ver/<?php echo $data->id_noticia; ?>"><img src="/assets/web/images/noticias/<?php echo $data->foto; ?>" alt="<?php echo $data->titulo; ?>"></a>
						<h3><?php echo $data->titulo; ?></h3>
						<?php echo $data->copete; ?>...</p>
						<div class="work-bottom">
							<a class="big-link-2 view-work" href="/assets/web/images/noticias/<?php echo $data->foto; ?>"><i class="fa fa-search"></i></a>
							<a class="big-link-2" href="<?= base_url(); ?>noticia/ver/<?php echo $data->id_noticia; ?>"><i class="fa fa-link"></i></a>
						</div>
					</div>
				</div>
				<?php		
						
				
				
				if($j==3 or $i==6){ ?>
						</div>
				<?php	}
				
				$i++;
				$j++; }

				if($i==4 or $i==1){ ?>
					<div class="col-sm-4">
					</div>
					<div class="col-sm-4">
					</div>
				</div>
				<?php } elseif($i==5 or $i==2){ ?>

					<div class="col-sm-4">
					</div>
				</div>
				<?php }
				//echo "I=".$i;
				// echo "J=".$j;
				?>

				<div class="row">
		            	

		           <p><?php echo $links; ?></p>

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


