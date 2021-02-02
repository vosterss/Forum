<?php
function listmessage (){
	$reponse = $bdd->prepare('select uti.username, pos.catégorie, pos.titre, pos.contenu, mess.message from utilisateur as uti, message as mess inner join post as pos on uti.id = pos.id_utilisateur, mess.id_post=pos.id, where pos.id');
	$reponse->execute(array());
	$result = $reponse->fetchAll();
return $result
?>