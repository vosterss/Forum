<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/style.css" media="all"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">	
		<title> Forum </title>
	</head>
  	<body>
  		<header>
		  	<div class="titre">
				<a href="index.php">
					<img src="images/dessin.svg" class="logo" alt='image logo'>
				</a>	
				<a href="index.php" class="lien-titre">
					<h1 class="txt-titre"> Forum </h1>
				</a>	
		  	</div>		                		
		  	<div class="connection">
		  		<div class="bouton-register">
			  		<a id="connect" href="register.php">		                	
						<button class="bouton-R" type="button">
							<p class="txt-bouton-connection"> Register </p>
						</button>
					</a>
				</div>
				<div class="bouton-login">
				  	<a id="connect" href="login.php">		                
						<button class="bouton-L" type="button">
							<p class="txt-bouton-connection"> Log In </p>
						</button>
					</a>
				</div>	
			</div>				
		</header>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="#">Topics</a>
			<a href="#">Warzone</a>
			<a href="#">Fortnite</a>
			<a href="#">Apex Legends</a>
			<a href="#">PUBG</a>
		</div>
		<div id="main">
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
		</div>		
		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			  document.getElementById("main").style.marginLeft = "250px";
			  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			  document.getElementById("main").style.marginLeft= "0";
			  document.body.style.backgroundColor = "white";
			}
		</script>		
