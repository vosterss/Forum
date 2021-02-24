<?php
	require 'view/header_index.php';
	require 'models/function_post.php';
	$result_m = all_post_user ($bdd,$id_utilisateur);
	$result_r = all_mess_user ($bdd,$id_utilisateur);
	$result_L = post_like($bdd);
	$result_R = post_recent($bdd);
	$result_P = post_populaire($bdd);
	require 'view/main_mypost.php';
	require 'view/footer_index.php';