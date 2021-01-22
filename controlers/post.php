<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/style_post.css" media="all"/>
		<title> Register </title>
	</head>
	<body>
		<?php
		require 'view/index/header_index.php'
		?>
		<div class="container">
			<h1 class="titre">Création d'un nouveau post</h1>
			<div class="formulaire">
				<form action="action_create_post.php" method="post">
					
					<p> 
						<input class="titre_input" type="text" name="titre" placeholder="Titre" required minlength="3" maxlength="30"/>
					</p>
					<p> 
						<input class="form_input" type="text" name="categorie" placeholder="Catégorie" required minlength="1" />
					</p>
					<p> 
						<textarea class="contenu_input" name="contenu" placeholder="écrire votre post ici" cols="150" maxlength="255" rows="5"></textarea>
					</p>
					<input type="submit" id='submit' value='Créer'>
				</form>
			</div>
		</div>
	</body>
</html>