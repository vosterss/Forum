<?php
    $reponse = $bdd->prepare('delete from post where id=?');
    $reponse->execute(array($_GET['id']));
    echo '<p class="test">Votre Post a été supprimé.</p>';
    header("url=index.php?p=accueil");


?>