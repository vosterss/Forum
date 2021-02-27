<?php
    
    $date= htmlspecialchars($_POST['date_ban']).' ' .htmlspecialchars($_POST['heur_ban']).':00';
    $reponse = $bdd->prepare('update utilisateur set id_droit =? , date_deban=? where id =?');  
    if (isset($_POST['ban_def'])){
        $def = htmlspecialchars($_POST['ban_def']);
        if ($def == true){
            $reponse->execute(array(3 ,$date, $_GET['id']));
            echo '<p class="test"> utilisateur bannie definitivement.</p>';
            header("Refresh:2 url=index.php?p=admin");
        }
    }
    
    else{
    $date= htmlspecialchars($_POST['date_ban']).' ' .htmlspecialchars($_POST['heur_ban']).':00';
    $reponse->execute(array(1 ,$date, $_GET['id']));
    echo '<p class="test">  utilisateur bannie.</p>';
    header("Refresh:2 url=index.php?p=admin");
    }
    