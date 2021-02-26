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
	$reponse = $bdd->prepare('SELECT uti.id, uti.username,po.id, po.categorie, po.contenu, po.titre, po.nb_like, po.date_publication from utilisateur as uti inner join post as po on uti.id = po.id_utilisateur AND po.categorie = ? AND po.date_publication = (SELECT MAX(date_publication) from post where post.categorie = ?) LIMIT 1;');
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
function all_post_user ($bdd,$id_utilisateur){
	$reponse = $bdd->prepare('SELECT * FROM post where id_utilisateur = ? ');
	$reponse->execute(array( $id_utilisateur));
	$result = $reponse->fetchAll();
	return $result;
}
function all_mess_user ($bdd,$id_utilisateur){
	$reponse = $bdd->prepare('SELECT * FROM message where id_utilisateur = ? ');
	$reponse->execute(array( $id_utilisateur));
	$result = $reponse->fetchAll();
	return $result;
}

function affiche_post($bdd,$id_post){
	$reponse = $bdd->prepare('SELECT uti.username, uti.avatar,po.titre, po.contenu, po.date_publication, po.isclosed, po.id from post as po inner join utilisateur as uti on uti.id = po.id_utilisateur where po.id = ?');
		$reponse->execute(array($id_post));
		$result = $reponse->fetchAll();
		return $result;
}

function affiche_comment($bdd,$id_post){
	$reponse = $bdd->prepare('SELECT mess.date_reponse, mess.message , uti.username, mess.id FROM message AS mess INNER JOIN utilisateur as uti on mess.id_utilisateur = uti.id where mess.id_post = ? order by mess.date_reponse ASC ');
		$reponse->execute(array($id_post));
		$result = $reponse->fetchAll();
		return $result;
}
function all_post ($bdd,$categorie){
	$reponse = $bdd->prepare('SELECT uti.id, uti.username, po.id, po.titre, po.contenu, po.nb_like, po.nb_mess, po.date_publication FROM utilisateur AS uti, post AS po WHERE uti.id = po.id_utilisateur and po.categorie = ?');
	$reponse->execute(array($categorie));
	$result = $reponse->fetchAll();
	return $result;
}
?>