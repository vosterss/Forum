<?php
    $username = htmlspecialchars($_POST['username']);
    $mdp_hash = sha1(htmlspecialchars($_POST['password']));
    $req = $bdd->prepare('SELECT avatar, id, password,id_droit FROM utilisateur WHERE username = :username');
    $req->execute(array('username' => $username));
    $resultat = $req->fetch();
    if($resultat){
    // Comparaison du pass envoyé via le formulaire avec la base
        if ($mdp_hash == $resultat['password'] && $resultat['id_droit'] != 1){
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['username'] = $username;
            $_SESSION['avatar'] = $resultat['avatar'];
            $_SESSION['id_droit'] = $resultat['id_droit'];
            header('Location:index.php');

        }
        else if ($resultat['id_droit'] == 1){
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