<?php
    $reponse = $bdd->prepare('delete from message where id=?');
    $reponse->execute(array($_GET['id']));
    echo '<p class="test">Votre message a été supprimé.</p>';
    if ($space == 'mespost') {
    	header("Refresh:2; url=index.php?p=mespost");
    }
    elseif ($space == 'voirpost') {
    	header("Refresh:2; url=index.php?p=voirpost&" .$id_post );
    }
    //header("Refresh:2; url=index.php?p=accueil");


?>