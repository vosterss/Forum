<?php
$rep =$bdd ->prepare('SELECT max(nb_mess) FROM post');
$rep -> execute(array());
$resu = $rep ->fetchAll();
foreach ($resu as $result) {
	$res = $result['max(nb_mess)'];}

	$reponse = $bdd->prepare('select uti.username, pos.categorie, pos.id, pos.titre, pos.contenu, nb_mess from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.nb_mess = "'.$res.'"');
	$reponse->execute(array());
	$resuls = $reponse->fetchAll();
return $resuls;
?>