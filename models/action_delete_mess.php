<?php
    $reponse = $bdd->prepare('delete from message where id=?');
    $reponse->execute(array($_GET['id']));
    echo '<p class="test">Votre message à été supprimer.</p>';
    header("Refresh:2; url=index.php?p=accueil");


?>