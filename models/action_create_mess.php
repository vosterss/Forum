<?php
	$id_post = $_GET['id'];
	$message = htmlspecialchars($_POST['message']);
	if(isset($id_post) && isset($message) && isset($id_utilisateur)){
		$reponse=$bdd->prepare('INSERT INTO message(id_post,id_utilisateur,message) VALUES (?,?,?)') ;
		$reponse->execute(array($id_post,$id_utilisateur,$message));
		echo '<p class="test">Votre Post :<br> '.$message. ' <br> à été publié.</p>';
		header("Refresh:2; url=index.php?p=voirpost&id=" .$id_post );
	}
	else{
		header('Locate:index.php');
	}
?> jhf