<?php
session_start();
	require 'models/connect_bdd.php';
	$page = 'accueil';
	if(isset($_GET['p'])){
		$page = $_GET['p'];
	}
	$categorie = '';
	if(isset($_GET['c'])){
		$categorie = $_GET['c'];
	}
	if($page == 'accueil'){
		include 'controlers/index.php';
	}
	if($page == 'register'){
		include 'controlers/register.php';
	}
	if($page == 'login'){
		include 'controlers/login.php';
	}
	if($page == 'a_login'){
		include 'models/action_login.php';
	}
	if($page == 'a_register'){
		include 'models/action_register.php';
	}
	if($page == 'deco'){
		include 'models/action_deco.php';
	}
	if($page == 'warzone'){
		include 'controlers/warzone.php';
	}
	if($page == 'fortnite'){
		include 'controlers/fortnite.php';
	}
	if($page == 'APEX'){
		include 'controlers/APEX.php';
	}
	if($page == 'PUBG'){
		include 'controlers/PUBG.php';
	}
	if($page == 'newpost'){
		include 'controlers/newpost.php';
	}
	if($page == 'profil'){
		include 'controlers/profil.php';
	}
	if($page == 'avatar'){
		include 'controlers/avatar.php';
	}
	if($page == 'change-mdp'){
		include 'controlers/change_mdp.php';
	}
?>