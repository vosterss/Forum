<?php
$dsn='mysql:host=localhost;dbname=forum';
$user='root';
$pass='' ;
$username = htmlspecialchars($_POST['username']);
try{
    $bdd = new PDO($dsn, $user, $pass);
}
catch(PDOException $e){
    die ('erreur :' .$e->getMessage());
}
$req = $bdd->prepare('SELECT id, password FROM utilisateur WHERE username = :username');
$req->execute(array('username' => $username));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
if ($resultat == 'false')
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['username'] = $username;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
?>