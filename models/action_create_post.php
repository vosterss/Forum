<?php
require_once 'jbbcode/Parser.php';
$titre = htmlspecialchars($_POST['titre_post']);
$categorie = htmlspecialchars($_POST['categorie']);
$contenu = htmlspecialchars($_POST['contenu']);
$date = date('d-m-y h:i:s');






$reponse=$bdd->prepare('INSERT INTO post(titre,id_utilisateur,contenu,date_publication) VALUES (?,?,?,?)') ;
$reponse->execute(array($titre,$id_utilisateur,$contenu,$date));
echo '<p class="test">Votre Post : '.$titre. ' à été publié.</p>';
header("Refresh:3; url=index.php");

?>