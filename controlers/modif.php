<?php
$id_mess= $_GET['id'];
	require 'view/header_index.php';
    require 'models/function_post.php';
    $comm = affiche_comment_user($bdd,$id_mess);
	require 'view/main_modif.php';
	require 'view/footer_index.php';
?>