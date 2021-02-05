<?php
	require 'view/header_index.php';
	require 'models/action_post_like.php';
	$result_L = post_like($bdd);
	require 'models/action_post_recent.php';
	require 'models/action_post_like.php';
	$result = postL()
	require 'models/action_post_populaire.php';
	require 'view/main_index.php';
	require 'view/footer_index.php';
?>