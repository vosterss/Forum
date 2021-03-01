<?php
if(isset($_FILES['importation'])){
	 $dossier = 'images/';
     $fichier = basename($_FILES['importation']['name']);
     if(move_uploaded_file($_FILES['importation']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
     	$chemin =  $dossier . $fichier ;
     	echo $chemin;
     	$reponse=$bdd->prepare("UPDATE utilisateur SET avatar = ? WHERE id = ?") ;
		$reponse->execute(array($chemin,$id_utilisateur));
		$_SESSION['avatar'] = $chemin;
		$avatar = $chemin;
		//var_dump($avatar);
        echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
     header('Refresh:2; url=index.php?p=avatar');
}
?>