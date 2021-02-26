<?php
	$id_newavatar= $_GET['id_avatar'] ;
	$reponse=$bdd->prepare('UPDATE utilisateur SET avatar = (SELECT avatar FROM pht_profil where id = ?) WHERE utilisateur.id = ?') ;
	$reponse->execute(array($id_newavatar,$id_utilisateur));

	$reponse2=$bdd->prepare('SELECT avatar from utilisateur where id = ?');
	$reponse2->execute(array($id_utilisateur));
	$resultat=$reponse2->fetch();
	$_SESSION['avatar'] = $resultat['avatar'];
	$avatar = $_SESSION['avatar'];
	header('Location:index.php?p=avatar');
?>