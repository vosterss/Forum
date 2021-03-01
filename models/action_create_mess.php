<?php
	$nb_mess = 1;
	$time = date('Y-m-d H:i:s', time());
	$id_post = $_GET['id'];
	$message= htmlspecialchars($_POST['message']);
	if(isset($id_post) && isset($message) && isset($id_utilisateur)){
		$reponse=$bdd->prepare('INSERT INTO message(id_post,id_utilisateur,message,date_reponse) VALUES (?,?,?,?)') ;
		$reponse->execute(array($id_post,$id_utilisateur,$message,$time));
		$repo=$bdd->prepare('select nb_mess from post where id = ?');
		$repo->execute(array($id_post));
		foreach($repo as $value){
			$nb_mess = $value['nb_mess'] + 1 ;
		}
		
		$rep=$bdd->prepare('UPDATE post set nb_mess = ? where id = ?');
		$rep->execute(array($nb_mess++ ,$id_post)); ;
		echo '<p class="test">Votre Post :<br> '.$message. ' <br> a été publié.</p>';
		header("Refresh:2; url=index.php?p=voirpost&id=" .$id_post );
	}
	else{
		header('Locate:index.php');
	}
?>