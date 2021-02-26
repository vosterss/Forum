<?php
    $date= htmlspecialchars($_POST['date_ban']).' ' .htmlspecialchars($_POST['heur_ban']).':00';

    $reponse = $bdd->prepare('update utilisateur set id_droit = ? , date_deban= ? where id = ?');
    $reponse->execute(array(1 ,$date, $_GET['id']));
    echo '<p class="test">  utilisateur bannie.</p>';
    header("Refresh:2 url=index.php?p=admin");