<?php
function postR (){
	$reponse = $bdd->prepare('select uti.username, pos.catégorie, max(pos.id), pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie');
	$reponse->execute(array());
	$result = $reponse->fetchAll();
return $result
}
	##foreach ($results as $result) {
		##echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
		##if($_SESSION!==''){
			##echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
		##}
	##}
?>