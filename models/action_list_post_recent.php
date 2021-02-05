<?php
	$reponse = $bdd->prepare('select uti.username, uti.id, pos.categorie, max(pos.id), pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.categorie');
	$reponse->execute(array());
	$results = $reponse->fetchAll();
?>