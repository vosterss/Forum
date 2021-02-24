	
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
			##var_dump($comm);
			
			foreach ($comm as $value) {
				echo $value['username'], $value['message'], $value['date'] .'<br>';

			}
		?>
	</div>
	<h2> Répondez : </h2>
	<form action="index.php?p=a_create_comm" method="post">
		<textarea id="editor" name="contenu" minlength="20" placeholder='votre réponse'></textarea>
		<input class="form_input" type="submit" id='submit' value='Créer'>
	</form>
</main>