<?php

$surname = htmlspecialchars($_POST['surname']);
$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$mail = htmlspecialchars($_POST['mail']);
$password = htmlspecialchars($_POST['password']);
$birthday = htmlspecialchars($_POST['birthday']);

if (empty($surname)){
	echo "Le Prenom est obligatoire."
}
else if (empty($name)){
	echo "Le Nom de famille est obligatoire.";
}
else if (empty($username)){
	echo "Le nom d'usage est obligatoire."
}
else if (empty($mail)){
	echo "Le mail est obligatoire.";
}
else if (empty($password)){
	"Le mot de passe est obligatoire."
}
else if (empty($birthday)){
	echo "La Date de naissance est obligatoire.";
}
$dsn='mysql:host=localhost;dbname=forum';
$user='root' ;
$password='' ;
try{
	$bdd = new PDO($dsn, $user, $password);
}
catch(PDOException $e){
	die ('erreur :' .$e->getMessage());
}
$reponse=$bdd->prepare('INSERT INTO utilisateur(surname,name,username,mail,password,birthday) VALUES (?,?,?,?,?,?)') ;
$reponse->execute(array($surname,$name,$username,$mail,$password,$birthday));

?>