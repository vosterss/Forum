<?php
	require 'view/header_index.php';
	require 'models/function_post.php';
	$result_L = post_like($bdd);
	$result_R = post_recent($bdd);
	$result_P = post_populaire($bdd);
	require 'view/main_index.php';
	require 'view/footer_index.php';
?>