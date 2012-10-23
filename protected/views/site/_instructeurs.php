		<ul class="thumbnails">
		<?php
			foreach($instructeurs as $user) {
				echo '<li class="span2">';
				//echo '<img src="data:image/jpg;base64,'.$user['contenu'].'" >' ;
				echo '<b>'.$user["nom"].'</b><br />';
				//echo "<b>".$user['groupe']."</b><br />";
				echo '</li>';
			}
		?>
	</ul>
	
