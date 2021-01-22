<?php
    $dsn='mysql:host=localhost;dbname=forum';
    $user='root';
    $pass='root' ;
    $username = htmlspecialchars($_POST['username']);
    $mdp_hash = sha1(htmlspecialchars($_POST['password']));
    try{
        $bdd = new PDO($dsn, $user, $pass);
    }
    catch(PDOException $e){
        die ('erreur :' .$e->getMessage());
    }
    $req = $bdd->prepare('SELECT id, password FROM utilisateur WHERE username = :username');
    $req->execute(array('username' => $username));
    $resultat = $req->fetch();
    if($resultat){
        // Comparaison du pass envoyé via le formulaire avec la base
        if (!$resultat)
        {
            header('Location:login.php');

        }
        else{
            if ($mdp_hash == $resultat['password']){
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['username'] = $username;
                header('Location:../index.php');

            }
            else {
                echo "Nom d'utilsateur ou mot de passe incorect";
                header('Location:login.php');

            }
        }
    }
    else{
        header('Location:../index.php');

        echo "Nom d'utilsateur ou mot de passe incorect";
    }
?>