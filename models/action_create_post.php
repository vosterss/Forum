<?php
	$erreur=0;
	$titre = htmlspecialchars($_POST['titre']);
	$categorie = htmlspecialchars($_POST['categorie']);
	$contenu = htmlspecialchars($_POST['contenu']);
	$date = date('d-m-y h:i:s');
		$reponse=$bdd->prepare('INSERT INTO post(titre,contenu,date_publication) VALUES (?,?,?)') ;
		$reponse->execute(array($titre,$contenu,$date));
		echo '<p class="test">Votre Post : '.$titre. ' à été publié.</p>';
	}
	else if ($erreur >= 0){
		echo "Des champs n'ont pas été saisis";
	}
?>