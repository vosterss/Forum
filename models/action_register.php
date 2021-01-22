<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/style_action_register.css" media="all"/>
		<title> Register </title>
	</head>
	<body>
		<?php
			require 'view/register/header_register.php';
		?>
		<main>
			<div class="background-co">
				<div class="register">
					<div class="titre_register">
						<h1 class="titre">Félicitation</h1>
					</div>
					<?php
						$erreur=0;
						$surname = htmlspecialchars($_POST['surname']);
						$name = htmlspecialchars($_POST['name']);
						$username = htmlspecialchars($_POST['username']);
						$mail = htmlspecialchars($_POST['mail']);
						$mdp = sha1(htmlspecialchars($_POST['password'])); 
						$birthday = htmlspecialchars($_POST['birthday']);
						$dsn='mysql:host=localhost;dbname=forum';
						$user='root';
						$password='root';
						if($erreur <= 0){
							try{
								$bdd = new PDO($dsn, $user, $password);
							}
							catch(PDOException $e){
								die ('erreur :' .$e->getMessage());
							}
							$reponse=$bdd->prepare('INSERT INTO utilisateur(surname,name,username,mail,password,birthday) VALUES (?,?,?,?,?,?)') ;
							$reponse->execute(array($surname,$name,$username,$mail,$mdp,$birthday));
							echo '<p class="test">Bienvenue, '.$surname. ' '. $name.' vous êtes désormais inscrit.</p>';
						}
						else if ($erreur >= 0){
							echo "Des champs n'ont pas été saisis";
						}
					?>
					<a href="index.php">
						<button class="form_input">
							Retourner à l'accueil
						</button>
					</a>
				</div>
			</div>	
		</main>
		<?php
			require 'view/register/footer_register.php';
		?>
	</body>
</html>