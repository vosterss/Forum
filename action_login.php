<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="CSS/style_action_register.css" media="all"/>
        <title> Register </title>
    </head>
    <body>
        <?php
            require 'view/register/header_register.php';
        ?>
        <main>
            <div class="register">
                <div class="titre_register">
                    <h1 class="titre">Félicitation</h1>
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
                    if($resultat){
                        // Comparaison du pass envoyé via le formulaire avec la base
                        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
                        if (!$resultat)
                        {
                            echo "Nom d'utilsateur ou mot de passe incorect";
                        }
                        else
                        {
                            if ($isPasswordCorrect) {
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
            </div>    
        </main>
        <?php
            require 'view/register/footer_register.php';
        ?>
    </body>
</html>