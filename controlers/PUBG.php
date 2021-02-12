<?php
	require 'view/header_index.php';
	require 'models/function_post.php';
	$result_L = post_like_categorie($bdd, $categorie);
	$result_R = post_recent_categorie($bdd, $categorie);
	$result_P = post_populaire_categorie($bdd, $categorie);
	require 'view/main_index.php';
	require 'view/footer_index.php';
?>