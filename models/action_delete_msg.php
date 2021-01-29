<?php
function deleteM (){
    $reponse = $bdd->prepare('delete from message where id=?');
    $reponse->execute(array($_GET['id']));}
}
?>