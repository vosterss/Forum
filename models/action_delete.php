<?php
function delete (){
    $reponse = $bdd->prepare('delete from post where id=?');
    $reponse->execute(array($_GET['id']));}
}
?>