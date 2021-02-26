
<?php

    $reponse = $bdd->prepare('select uti.username, pos.catégorie, pos.id, pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie = ?');
    $reponse->execute(array());
    $results = $reponse->fetchAll();


?>	