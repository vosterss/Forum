<?php
    $date = date('Y-m-d H:i:s', time());
    $reponse = $bdd->prepare('update utilisateur set id_droit = ?, date_deban= ? where id = ?');
    $reponse->execute(array(0 ,$date, $_SESSION['id']));
    echo '<p class="test">  utilisateur débannie.</p>';
    if($_SESSION['id_droit'] == 2 ){
        header("Refresh:2 url=index.php?p=admin");
    }
    else{
        header('Refresh:2 url=index.php?p=login');
    }