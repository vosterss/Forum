<?php
    $username = htmlspecialchars($_POST['username']);
    $mdp_hash = sha1(htmlspecialchars($_POST['password']));
    $req = $bdd->prepare('SELECT avatar,mail, name,surname, id, password,id_droit, date_deban FROM utilisateur WHERE username = :username');
    $req->execute(array('username' => $username));
    $resultat = $req->fetch();
    if($resultat){
        $time=strtotime($resultat['date_deban']);
    // Comparaison du pass envoyé via le formulaire avec la base
        if ($mdp_hash == $resultat['password'] && $resultat['id_droit'] != 1 && $resultat['id_droit'] != 3 ){
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['username'] = $username;
            $_SESSION['mail'] = $resultat['mail'];
            $_SESSION['name'] = $resultat['name'];
            $_SESSION['surname'] = $resultat['surname'];
            $_SESSION['avatar'] = $resultat['avatar'];
            $_SESSION['id_droit'] = $resultat['id_droit'];
            $_SESSION['like'] = 0;
            $_SESSION['date_deban'] = $resultat['date_deban'];
            $time=strtotime($_SESSION['date_deban']);
            header('Location:index.php');

        }
        
        else if($resultat['id_droit'] == 1 && $time >= time() || $resultat['id_droit'] == 3 ){
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['id_droit'] = $resultat['id_droit'];
            $_SESSION['date_deban'] = $resultat['date_deban'];
            echo $_SESSION['date_deban'] ;
            // Si la personne est bannie :
            header('Location:index.php?p=login');
        }  else if ($time <= time() && $resultat['id_droit'] == 1){
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['id_droit'] = $resultat['id_droit'];
            $_SESSION['date_deban'] = $resultat['date_deban'];
            include 'models/action_debann_user.php';
        }
        else {
            header('Location:index.php?p=log1');
        }
    }
    else{
        header('Location:index.php?p=login');
    }
?>