<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/style_clair.css" media="all" id="theme-link" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<script src="js/tinymce.js" referrerpolicy="origin"></script>
		<title> Forum </title>
	</head>
  	<body>
  		<header>
		  	<div class="titre">
				<a href="index.php">
					<img src="images/dessin.png" class="logo" alt='image logo'>
				</a>	
				<a href="index.php" class="lien-titre">
					<h1 class="txt-titre"> Forum </h1>
				</a>	
		  	</div>
		  	<?php 
			  if (isset($_SESSION['id_droit'])){
				if ($_SESSION['id_droit'] == 1 || $_SESSION['id_droit'] == 3){
					unset($_SESSION['id']);
				}
			}
		  		if(!isset($_SESSION['id'])){
		  	?>		                		
				  	<div class="connexion">
				  		<div class="bouton-register">
					  		<a id="connect" href="index.php?p=register">           	
								<button class="bouton-R" type="button">
									<p class="txt-bouton-connexion"> Register </p>
								</button>
							</a>
						</div>
						<div class="bouton-login">
						  	<a id="connect" href="index.php?p=login">         
								<button class="bouton-L" type="button">
									<p class="txt-bouton-connexion"> Log In </p>
								</button>
							</a>
						</div>	
					</div>
			<?php 
				}
				else{
			?>
		        	<div class="dropdown" style="float:right;">
						<img src='<?php echo $avatar ; ?>' class="avatar" alt=""/>
						<div class="dropdown-content">
							<a href="index.php?p=profil">Mon profil</a>
							<a href="index.php?p=mespost">Mes Posts</a>
							<a href="index.php?p=deco">Déconnexion</a>
							<a href='index.php?p=newpost'>Créer un Post</a>
							<?php if($id_droit == 2){?>	<a href='index.php?p=admin'>Espace admin</a>	<?php } ?>
						</div>
					</div>	
			<?php
				}
			?>				
		</header>
		<main>
			<div class="header-bot">
				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="index.php?p=warzone&c=0">Warzone</a>
					<a href="index.php?p=fortnite&c=1">Fortnite</a>
					<a href="index.php?p=apex&c=2">Apex Legends</a>
					<a href="index.php?p=pubg&c=3">PUBG</a>
				</div>
				<div id="main">
					<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Topics</span>
				</div>		
				<script>
					function openNav(){
						document.getElementById("mySidenav").style.width = "250px";
						document.getElementById("main").style.marginLeft = "250px";
						document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
					}

					function closeNav(){
						document.getElementById("mySidenav").style.width = "0";
						document.getElementById("main").style.marginLeft= "0";
						document.body.style.backgroundColor = "white";
					}
				</script>
				<div class="search-et-theme">
					<div class="search">
						<div class="fa fa-search">
						</div>	
						<form method="get"> 
							<p>
								<input class="form_input" type="search" name="q" placeholder="Rechercher un post" required minlength="1" maxlength="1000"/>
							</p>
						</form>			
					</div>
				</div>		
			</div>	
			
				
					