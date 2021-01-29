<?php 
function postL (){
	$reponse = $bdd->prepare('select uti.username, pos.catégorie, pos.id, pos.titre, pos.contenu,max(pos.like_p) from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie');
	$reponse->execute(array('M','24'));
	$result = $reponse->fetchAll();
return $result;
?>