<?php

$message = htmlspecialchars($_POST['message']);
$reponse = $bdd->prepare('UPDATE message set message = ? where id = ?');
$reponse->execute(array($message ,$_GET['id']));
echo $_GET['id'];
echo '<p class="test">  message modifié.</p>';

header("Refresh:2;  url=index.php?p=accueil");
?>