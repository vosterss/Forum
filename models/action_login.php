<?php
    $username = htmlspecialchars($_POST['username']);
    $mdp_hash = sha1(htmlspecialchars($_POST['password']));
    $req = $bdd->prepare('SELECT id_avatar,id_droit, id, password, ban FROM utilisateur WHERE username = :username');
    $req->execute(array('username' => $username));
    $resultat = $req->fetch();
    if($resultat){
    // Comparaison du pass envoyé via le formulaire avec la base
        if ($mdp_hash == $resultat['password'] && $resultat['ban'] == 0){
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['username'] = $username;
            $_SESSION['id_avatar'] = $resultat['id_avatar'];
            $_SESSION['id_droit'] = $resultat['id_droit'];
            header('Location:index.php');

        }
        else if ($resultat['ban'] == 1){
            // Si la personne est bannie :
            header('Location:index.php?p=login');
        }
        else {
            header('Location:index.php?p=login');
        }
    }
    else{
        header('Location:index.php?p=login');
    }

?>