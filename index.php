<?php
session_start();
	require 'models/connect_bdd.php';
	$page = 'accueil';
	if(isset($_GET['p'])){
		$page = $_GET['p'];
	}
	if($page == 'accueil'){
		include 'controlers/index.php';
	}
	if($_GET['p'] == 'register'){
		include 'controlers/register.php';
	}
	if($page == 'login'){
		include 'controlers/login.php';
	}
	if($page == 'a_login'){
		include 'models/action_login.php';
	}
	if($page == 'deco'){
		include 'models/action_deco.php';
	}
?>