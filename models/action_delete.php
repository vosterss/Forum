<?php
    $reponse = $bdd->prepare('delete from post where id=?');
    $reponse->execute(array($_GET['id']));
    echo '<p class="test">Votre Post à été supprimer.</p>';
    header("url=index.php?p=accueil");


?>