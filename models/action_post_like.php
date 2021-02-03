<?php 
	$rep =$bdd ->prepare('SELECT max(nb_like) FROM post');
	$rep -> execute(array());
	$resu = $rep ->fetchAll();
	foreach ($resu as $result) {
		$res = $result['max(nb_like)'];}


	$reponse = $bdd->prepare('select uti.username, uti.id, pos.categorie, pos.id, pos.titre, pos.contenu, pos.nb_like, pos.nb_like from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.nb_like="'.$res.'" ');
	$reponse->execute(array());
	$res = $reponse->fetchAll();
?>