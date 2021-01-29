<?php 
    $id_post=($_GET['id']);
    $reponse=$bdd->prepare('UPDATE `post` SET `nb_like` = nb_like+1 WHERE `post`.`id` = ? ') ;
    $reponse->execute(array($id_post));}

?>