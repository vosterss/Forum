<?php
$reponse = $bdd->prepare('sselect uti.username, pos.catégorie, pos.id, pos.titre, pos.contenu, max(nb_mess) from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie');
	$reponse->execute(array());
	$result = $reponse->fetchAll();
return $result;
?>