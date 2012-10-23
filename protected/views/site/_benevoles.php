		<ul class="thumbnails">
		<?php
			foreach($benevoles as $user) {
				echo '<li class="span2"><img src="data:image/jpg;base64,'.$user['contenu'].'" >' ;
				echo '<b>'.$user["nom"].'</b><br />';
				echo "<b>".$user['groupe']."</b><br /></li>";
				//echo date('Y-m-d');
			}
		?>
	</ul>
	
