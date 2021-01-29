<?php 
    $id_post=($_GET['id']);
    $reponse=$bdd->prepare('UPDATE `post` SET `nb_mess` = nb_mess+1 WHERE `post`.`id` = ? ') ;
    $reponse->execute(array($id_post));}

?>