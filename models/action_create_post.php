<?php
	$titre = htmlspecialchars($_POST['titre_post']);
	$categorie = $_POST['categorie'];
	$contenu = htmlspecialchars($_POST['contenu']);
	//$contenu = $contenu->getAsHtml();
	//echo $contenu;
	$reponse=$bdd->prepare('INSERT INTO post(titre,id_utilisateur,categorie, contenu) VALUES (?,?,?,?)') ;
	$reponse->execute(array($titre,$id_utilisateur,$categorie,$contenu));
	echo '<p class="test">Votre Post : '.$titre. ' a été publié.</p>';
	header("Refresh:3; url=index.php");

?>