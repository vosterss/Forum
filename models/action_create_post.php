<?php
	$titre = htmlspecialchars($_POST['titre_post']);
	$categorie = $_POST['categorie'];
	$contenu = htmlspecialchars($_POST['contenu']);
	//$contenu = $contenu->getAsHtml();
	//echo $contenu;
	$date = date('d-m-y h:i:s');
	$reponse=$bdd->prepare('INSERT INTO post(titre,id_utilisateur,categorie, contenu,date_publication) VALUES (?,?,?,?,?)') ;
	$reponse->execute(array($titre,$id_utilisateur,$categorie,$contenu,$date));
	echo '<p class="test">Votre Post : '.$titre. ' a été publié.</p>';
	header("Refresh:3; url=index.php");

?>