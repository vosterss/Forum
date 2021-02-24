<?php
	require 'models/function_post.php';
	require 'view/header_index.php';
	/*require 'models/function_post.php';
	$result_m = all_post_user ($bdd,$id_utilisateur);
	$result_r = all_mess_user ($bdd,$id_utilisateur);
	$result_L = post_like($bdd);
	$result_R = post_recent($bdd);
	$result_P = post_populaire($bdd);
	require 'view/main_mypost.php';*/
	$post = affiche_post($bdd,$id_auteur,$id_post);
	$comm = affiche_comment($bdd,$id_post);
	require 'view/main_post.php';
	require 'view/footer_index.php';
?>j