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
	$id_utilisateur = '';
	if(isset($_SESSION['id'])){
		$id_utilisateur = $_SESSION['id']; 
		$id_droit = $_SESSION['id_droit'];
	}
	$username = '';
	if(isset($_SESSION['username'])){
		$username = $_SESSION['username']; 
	}
	if(isset($_SESSION['avatar'])){
		$avatar = $_SESSION['avatar']; 
	}
	if($page == 'avatar' && isset($_GET['id_avatar'])){
		include 'models/action_avatar.php';
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
	if ($page == 'a_change_mdp') {
		include 'models/action_change_mdp.php';
	}
	if($page == 'a_create_post'){
		include_once 'models/action_create_post.php';
	}
	if($page == 'a_create_comm'){
		include_once 'models/action_create_mess.php';
	}
	if($page == 'delete'){
		include_once 'models/action_delete.php';
	}
	if($page == 'delete_m'){
		include_once 'models/action_delete_mess.php';
	}
	if($page == 'bannir'){
		include_once 'models/action_dbann_user.php';
	}
	if($page == 'mespost'){
		include_once 'controlers/mespost.php';
	}
	if($page == 'voirpost' && isset($_GET['id'])){
		$id_post = $_GET['id'];
		include_once 'controlers/voirpost.php';
	}
	if ($page == 'a_importation') {
		include_once 'models/action_importation.php';
	}
	if($page == 'admin'){
		include_once 'controlers/admin.php';
	}
	//var_dump($id_avatar);
	//var_dump($id_utilisateur);
	//var_dump($username);
	//var_dump($avatar);
	//var_dump($id_droit);
?>