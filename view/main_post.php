	
	<h1> message </h2>
	<div>
		<?php
			//var_dump($post);
			foreach ($post as $value) {
				echo $value['username'], $value['titre'],$value['contenu'],$value['date_publication'].'<br>';

			}
		?>
	</div>
	<h1> Réponse </h1>
	<div>
		<?php
			//var_dump($post);
			
			foreach ($comm as $value) {
				echo $value['username'], $value['message'], $value['date'] .'<br>';

			}
		?>
	</div>

</main>