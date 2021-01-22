<?php
	$reponse = $bdd->prepare('select uti.username, pos.catégorie, max(pos.id), pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=1');
	$reponse->execute(array('M','24'));
	$results = $reponse->fetchAll();
	foreach ($results as $result) {
		echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
		if($_SESSION!==''){
			echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
		}
	}
?>