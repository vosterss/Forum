<?php
function search_avatar ($id_avatar){
	$reponse = $bdd->prepare('SELECT avatar from photo_profil where id = ?');
	$reponse->execute(array($id_avatar));
	$result = $reponse->fetchAll();
	return $result;
}

?>