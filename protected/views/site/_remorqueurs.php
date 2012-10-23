		<ul class="thumbnails">
		<?php
			foreach($benevoles as $user) {
				echo '<li class="span2">';
				//echo '<img src="data:image/jpg;base64,'.$user['contenu'].'" >' ;
				echo '<b>'.$user["nom"].'</b><br />';
				//echo "<b>".$user['groupe']."</b><br />";
				//echo date('Y-m-d');
				echo '</li>';
			}
		?>
	</ul>
	<?php //print_r($benevoles);)>
