	<div>
		<?php
			//var_dump($post);
			foreach ($post as $value) {
				echo $value['username'], $value['titre'],$value['contenu'],$value['date_publication'];

			}
		?>
	</div>

</main>