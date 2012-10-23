    		<div id="myCarousel" class="carousel slide">
		  <!-- Carousel items -->
		  <div class="carousel-inner">
					<?php 
						foreach($files as $cle=>$valeur) 
						{ 
						echo '<div class="item" id="imgUpdate'.$cle.'">
						
									<img src="../'.$valeur.'" alt="">
						
							</div>'; 
						} 
						
					
					?>

		  </div>
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
