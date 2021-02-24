<?php
	$id_post = $_GET['id'];
	require 'models/function_post.php';
	#require 'models/action_create_mess.php';
	require 'view/header_index.php';
	$post = affiche_post($bdd,$id_auteur,$id_post);
	$comm = affiche_comment($bdd,$id_post);
	require 'view/main_post.php';
	require 'view/footer_index.php';
?>j