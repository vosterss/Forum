<?php
	$id_post = $_GET['id'];
	#$id_utilisateur = $_SESSION['id'];
	$message = htmlspecialchars($_POST['contenu']);
	$date = date('d-m-y h:i:s');
	$reponse=$bdd->prepare('INSERT INTO message(id_post,id_utilisateur,message) VALUES (?,?,?)') ;
	$reponse->execute(array($id_post,$id_utilisateur,$message));
	echo '<p class="test">Votre Post :<br> '.$message. ' <br> à été publié.</p>';
	header("Refresh:3; url=index.php?p=voirpost&id=" .$id_post );
?>