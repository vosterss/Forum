<?php
	$rep =$bdd ->prepare('SELECT max(id) FROM post');
	$rep -> execute(array());
	$resu = $rep ->fetchAll();
	foreach ($resu as $result) {
		$res = $result['max(id)'];}
		

	$reponse = $bdd->prepare('select uti.username, uti.id, pos.categorie, pos.id, pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.id ="'.$res.'"');
	$reponse->execute(array());
	$results = $reponse->fetchAll();
?>