<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/style_clair.css" media="all" id="theme-link" >
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
		  	<?php 
		  		if(!isset($_SESSION['id'])){
		  	?>		                		
				  	<div class="connection">
				  		<div class="bouton-register">
					  		<a id="connect" href="index.php?p=register">		                	
								<button class="bouton-R" type="button">
									<p class="txt-bouton-connection"> Register </p>
								</button>
							</a>
						</div>
						<div class="bouton-login">
						  	<a id="connect" href="index.php?p=login">		                
								<button class="bouton-L" type="button">
									<p class="txt-bouton-connection"> Log In </p>
								</button>
							</a>
						</div>	
					</div>
			<?php 
				}
				else{
			?>
					<div class="bouton-theme">		                	
						<a id="connect" href="index.php?p=deco">		                
							<button class="bouton-L" type="button">
								<p class="txt-bouton-connection"> Déconnection </p>
							</button>
						</a>
					</div>		
			<?php
				}
			?>				
		</header>
		<main>
			<div class="header-bot">
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
				<div class="search-et-theme">
					<div class="search">
						<div class="fa fa-search">
						</div>	
						<form method="get"> 
							<p>
								<input class="form_input" type="search" name="q" placeholder="Rechercher" required minlength="1" maxlength="1000"/>
							</p>
							<?php
									if(isset($_GET['q'])){
									    $q = htmlspecialchars($_GET['q']);
									    $articles = $bdd->query('SELECT titre FROM post WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
									
								if($articles->rowCount() > 0) { 
							?>
								   <ul>
								   <?php while($a = $articles->fetch()) { ?>
								      <li><?= $a['titre'] ?></li>
								   <?php } ?>
								   </ul>
								<?php } else { ?>
									Aucun résultat pour: <?= $q ?>...
								<?php } }?>
						</form>			
					</div>
					<div class="bouton-theme">
						<span id="theme">		                	
							<button class="bouton-T" type="button">
								<div class="fa fa-moon-o">
								</div>	
							</button>
						</span>
					</div>
				</div>		
			</div>	
			
				
					