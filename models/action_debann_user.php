<?php
    $date = date('Y-m-d H:i:s', time());
    $reponse = $bdd->prepare('update utilisateur set id_droit =?, date_deban=? where id =?');
    if($_SESSION['id_droit'] == 2 ){
        $reponse->execute(array(0 ,$date, $_GET['id']));
        echo '<p class="test">  utilisateur débanni.</p>';
        header("Refresh:2 url=index.php?p=admin");
    }
    else if($_SESSION['id_droit'] == 3) {
        $reponse->execute(array(3 ,$date, $_SESSION['id']));
        echo '<p class="test">  utilisateur banni à vie .</p>';
        header('Refresh:2 url=index.php?p=login');
    }else{
        $reponse->execute(array(0 ,$date, $_SESSION['id']));
        echo '<p class="test">  utilisateur débanni! Vous pouvez vous connecter.</p>';
        header('Refresh:2 url=index.php?p=login');
    }