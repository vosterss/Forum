<?php
function post_recent($bdd){
	$reponse = $bdd->prepare('SELECT uti.id, uti.username, po.id,po.categorie, po.contenu, po.titre, po.nb_like, po.date_publication from utilisateur as uti inner join post as po on uti.id = po.id_utilisateur AND po.date_publication = (SELECT MAX(date_publication) from post) LIMIT 1;');
	$reponse->execute(array());
	$result = $reponse->fetchAll();
	return $result;
}

function post_like($bdd){
	$reponse = $bdd->prepare('SELECT uti.id, uti.username, po.id, po.categorie, po.titre, po.contenu, po.nb_like, po.date_publication FROM utilisateur AS uti, post AS po WHERE uti.id = po.id_utilisateur AND po.nb_like = (SELECT MAX(nb_like) from post) LIMIT 1;');
	$reponse->execute(array());
	$result = $reponse->fetchAll();
	return $result;
}

function post_populaire($bdd){
	$reponse = $bdd->prepare('SELECT uti.id, uti.username, po.id, po.categorie, po.contenu, po.titre, po.date_publication, po.nb_mess FROM utilisateur as uti inner join post as po on uti.id = po.id_utilisateur And po.nb_mess = (SELECT max(nb_mess) from post) LIMIT 1;');
	$reponse->execute(array());
	$result = $reponse->fetchAll();
	return $result;
}

function post_recent_categorie($bdd,$categorie){
	$reponse = $bdd->prepare('SELECT uti.id, uti.username,po.id po.categorie, po.contenu, po.titre, po.nb_like, po.date_publication from utilisateur as uti inner join post as po on uti.id = po.id_utilisateur AND po.categorie = ? AND po.date_publication = (SELECT MAX(date_publication) from post where post.categorie = ?) LIMIT 1;');
	$reponse->execute(array($categorie, $categorie));
	$result = $reponse->fetchAll();
	return $result;
}

function post_like_categorie($bdd,$categorie){
	$reponse = $bdd->prepare('SELECT uti.id, uti.username, po.id, po.titre, po.contenu, po.nb_like, po.date_publication FROM utilisateur AS uti, post AS po WHERE uti.id = po.id_utilisateur AND po.categorie = ? AND po.nb_like = (SELECT MAX(nb_like) from post where post.categorie = ?) LIMIT 1;');
	$reponse->execute(array($categorie, $categorie));
	$result = $reponse->fetchAll();
	return $result;
}

function post_populaire_categorie($bdd,$categorie){
	$reponse = $bdd->prepare('SELECT uti.id, uti.username, po.id, po.categorie, po.contenu, po.titre, po.date_publication, po.nb_mess FROM utilisateur as uti inner join post as po on uti.id = po.id_utilisateur AND po.categorie = ? And po.nb_mess = (SELECT max(nb_mess) from post where post.categorie = ?) LIMIT 1;');
	$reponse->execute(array($categorie, $categorie));
	$result = $reponse->fetchAll();
	return $result;
}
?>