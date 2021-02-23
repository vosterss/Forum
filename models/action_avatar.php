<?php
$id_newavatar= $_GET['id_avatar'] ;
$reponse=$bdd->prepare('UPDATE utilisateur SET id_avatar = ? WHERE utilisateur.id = ?;') ;
	$reponse->execute(array($id_newavatar,$id_utilisateur));
	$_SESSION['id_avatar'] = $id_newavatar;
	header('Location:index.php?p=profil'); 
?>