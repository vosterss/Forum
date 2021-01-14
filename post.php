<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/style_action_register.css" media="all"/>
		<title> Register </title>
	</head>
	<body>
		<form action="action_create_post.php" method="post">
			<div class="formulaire">
				<p> 
					<input class="form_input" type="text" name="titre" placeholder="Titre" required minlength="3" maxlength="30"/>
				</p>
				<p> 
					<input class="form_input" type="text" name="categorie" placeholder="Catégorie" required minlength="1" />
				</p>
				<p> 
					<input class="form_input" type="text" name="contenu" placeholder="écrire votre post ici" required minlength="3" maxlength="30"/>
				</p>
			</div>
	</body>
</html>