<?php 
function like ($bdd,$id_post){
    
    $id_post=$_GET['id'];
    $reponse=$bdd->prepare('UPDATE `post` SET `nb_like` = nb_like+1 WHERE `post`.`id` = ? limit  1 ') ;
    $reponse->execute(array($id_post));
    $_SESSION['like'] = 0.5 + $id_post;
    header("location:index.php?p=voirpost&id=" .$id_post );
    return ( $_SESSION['like']);
}
?>