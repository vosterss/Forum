<?php
	$id_auteur = $_GET['id_auteur'];
	var_dump($id_auteur);
	$id_post = $_GET['id'];
	$message = htmlspecialchars($_POST['message']);
	$reponse=$bdd->prepare('INSERT INTO message(id_post,id_utilisateur,message) VALUES (?,?,?)') ;
	$reponse->execute(array($id_post,$id_utilisateur,$message));
	echo '<p class="test">Votre Post :<br> '.$message. ' <br> à été publié.</p>';
	header("Refresh:3; url=index.php?p=voirpost&id=" .$id_post. "&id_auteur=".$id_auteur );
?>