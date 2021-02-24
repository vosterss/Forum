<?php
$id_post = htmlspecialchars($_POST['id']);
#$id_utilisateur = $_SESSION['id'];
$message = htmlspecialchars($_POST['contenu']);
$date = date('d-m-y h:i:s');
$reponse=$bdd->prepare('INSERT INTO message(id_post,id_utilisateur,message,date) VALUES (?,?,?,?)') ;
$reponse->execute(array($id_post,$id_utilisateur,$message,$date));
echo '<p class="test">Votre Post : '.$titre. ' à été publié.</p>';
#header("Refresh:3; url=index.php");
?>