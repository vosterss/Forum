<?php 
function post_like($bdd){
	$reponse = $bdd->prepare('SELECT uti.id, uti.username, po.id, po.titre, po.contenu, max(po.nb_like) FROM utilisateur AS uti, post AS po WHERE uti.id = po.id_utilisateur;');
	$reponse->execute(array());
	$result = $reponse->fetchAll();
	return $result;
}
?>