<?php
    $reponse = $bdd->prepare('update utilisateur set id_droit = ? where id = ?');
    $reponse->execute(array(1 ,$_GET['id']));
    echo '<p class="test">  utilisateur bannie.</p>';
    header("Refresh:2 url=index.php?p=admin");