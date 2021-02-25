<?php
	$surname = htmlspecialchars($_POST['surname']);
	$name = htmlspecialchars($_POST['name']);
	$username = htmlspecialchars($_POST['username']);
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = sha1(htmlspecialchars($_POST['password'])); 
	$birthday = htmlspecialchars($_POST['birthday']);
	$avatar = 'images/avatar1.jpg';
	
	$reponse=$bdd->prepare('INSERT INTO utilisateur(surname,name,username,mail,password,birthday,avatar) VALUES (?,?,?,?,?,?,?)') ;
	$reponse->execute(array($surname,$name,$username,$mail,$mdp,$birthday,$avatar));
	require 'models/action_login.php';
?>