<?php
$id_post = $_GET['id_post'];
	if($_GET['action'] == 'ouvrir'){
		$action = 0;
	}
	else if($_GET['action'] == 'fermer'){
		$action = 1;
	}
	if($id_droit == 2){
		$reponse = $bdd->prepare('UPDATE post SET isclosed = ? WHERE post.id = ? ; ');
		$reponse->execute(array($id_post));
		$result = $reponse->fetchAll($action,$id_post);
	}
	header('Location:index.php?p=voirpost&id='echo $id_post ;)
?>