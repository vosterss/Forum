<?php
    $username = htmlspecialchars($_POST['username']);
    echo $username;
    $mdp_hash = sha1(htmlspecialchars($_POST['password']));
    echo $mdp_hash;
    $req = $bdd->prepare('SELECT id, password FROM utilisateur WHERE username = :username');
    $req->execute(array('username' => $username));
    $resultat = $req->fetch();
    var_dump($resultat);

    if($resultat){
    // Comparaison du pass envoyé via le formulaire avec la base
        if ($mdp_hash == $resultat['password']){
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['username'] = $username;
            header('Location:index.php');

        }
        else {
            header('Location:login.php');
        }
    }
    else{
        header('Location:login.php');
    }

?>