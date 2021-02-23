<?php
	$mdp_hash = sha1(htmlspecialchars($_POST['password']));
	$new_mdp_hash1 = sha1(htmlspecialchars($_POST['new_password1']));
	$new_mdp_hash2 = sha1(htmlspecialchars($_POST['new_password2']));
	$req = $bdd->prepare('SELECT password FROM utilisateur WHERE id = ?');
    $req->execute(array($id_utilisateur));
    $ancien_mdp = $req->fetch();
    var_dump($ancien_mdp[0]);
    if($mdp_hash == $ancien_mdp[0]){
	    if($new_mdp_hash1 == $new_mdp_hash2){
	    	$req = $bdd->prepare('UPDATE utilisateur SET password = ? WHERE utilisateur.id = ?; ');
    		$req->execute(array($new_mdp_hash1,$id_utilisateur));
    		header('Location:index.php?p=profil');
	    }
	    else{
	    	header('Location:index.php?p=change_mdp');
	    }
	}
	else{
		header('Location:index.php?p=change_mdp');
	}

?>