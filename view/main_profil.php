	<div class="main-profil">
		
		<div class="avatar-mdp">
			<h2><p> <?php echo $username ;?><p></h2>
    			
    				
    		
				<div class="profil-avatar">
				<a href="index.php?p=avatar">
					<img src='<?php echo $avatar ; ?>' class="profil-avatar-img" alt=""/>
				</a>
				<a href="index.php?p=avatar">
					<p> Changer d'avatar </p>
				</a>
			</div>
			<div class='profil-mdp'>Nom : <?php echo $_SESSION['surname']; ?></div>
		<div class='profil-mdp'>Prénom : <?php echo $_SESSION['name']; ?></div>
		<div class='profil-mdp'>mail : <?php echo$_SESSION['mail']; ?></div>
			<div class="profil-mdp">
				<a href="index.php?p=change-mdp">Changer votre mot de passe</a>
			</div>
		</div>
		<aside> 
	
		</aside>
	<div>	
</main>