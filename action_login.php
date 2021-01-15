<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="CSS/style_register.css" media="all"/>
        <title> Register </title>
    </head>
    <body>
        <?php
            require 'view/register/header_register.php';
        ?>
        <main>
            <div class="register">
                <div class="titre_register">
                    <h1 class="titre">Connexion</h1>
                </div>
                <?php
                $dsn='mysql:host=localhost;dbname=forum';
                $user='root';
                $pass='' ;
                $username = htmlspecialchars($_POST['username']);
                $mdp_hash =sha1(htmlspecialchars($_POST['password']));
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
                        echo "Nom d'utilsateur ou mot de passe incorect";
                    }
                    else{
                        if ($mdp_hash == $resultat['password']){
                            session_start();
                            $_SESSION['id'] = $resultat['id'];
                            $_SESSION['username'] = $username;
                            echo '<p class="test">Bonjour, '.$username. ' vous êtes désormais connecté.</p>';
                        }
                        else {
                            echo "Nom d'utilsateur ou mot de passe incorect";
                        }
                    }
                }
                else{
                    echo "Nom d'utilsateur ou mot de passe incorect";
                }

                ?>
                <a href="index.php">
                    <button class="form_input">
                        Retourner à l'accueil
                    </button>
                </a>
            </div>    
        </main>
        <?php
            require 'view/register/footer_register.php';
        ?>
    </body>
</html>