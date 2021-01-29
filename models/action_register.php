<?php
	$surname = htmlspecialchars($_POST['surname']);
	$name = htmlspecialchars($_POST['name']);
	$username = htmlspecialchars($_POST['username']);
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = sha1(htmlspecialchars($_POST['password'])); 
	$birthday = htmlspecialchars($_POST['birthday']);
	
	$reponse=$bdd->prepare('INSERT INTO utilisateur(surname,name,username,mail,password,birthday) VALUES (?,?,?,?,?,?)') ;
	$reponse->execute(array($surname,$name,$username,$mail,$mdp,$birthday));
	echo '<p class="test">Bienvenue, '.$surname. ' '. $name.' vous êtes désormais inscrit.</p>';
?>