<?php
function search_avatar ($bdd,$id_avatar){
	$reponse = $bdd->prepare('SELECT avatar from pht_profil where id = ?');
	$reponse->execute(array($id_avatar));
	$result = $reponse->fetchAll();
	return $result;
}
function all_user ($bdd){
	$reponse = $bdd->prepare('SELECT * FROM utilisateur order by id asc ');
	$reponse->execute(array( ));
	$result = $reponse->fetchAll();
	return $result;
}

?>