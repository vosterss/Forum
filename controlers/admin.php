<?php
	require 'view/header_index.php';
	require 'models/function_avatar.php';
	$result_m = all_user ($bdd);
	require 'view/main_all_user.php';
	require 'view/footer_index.php';