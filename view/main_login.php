<main>
	<div class="background-co">
		<div class="login">
			<div class="titre_register">
				<h1> Connexion </h1>
			</div>
			<div class="banni">
			<?php
			if (isset($_SESSION['id_droit'])){
				if ($_SESSION['id_droit'] == 1  ){
					echo "<p> Vous avez été banni jusqu'au : ".$_SESSION['date_deban'];
				}else if ($_SESSION['id_droit'] == 3  ){
						echo "<p> Vous avez été banni definitivement</p>";
				}
			}
			?>
			</div>
			<div class="form_login">
				<form action="index.php?p=a_login" method="post">
					<p> 
						<input class="form_input" type="text" name="username" placeholder="Nom d'utilisateur" required minlength="3" maxlength="30"/>
					</p>
					<p> 
						<input class="form_input" type="password" name="password" placeholder="Mot de passe" required minlength="8"/>
					</p>
					<div class="form_submit">
						<input class="form_input" type="submit" value="Se connecter"/>
					</div>
				</form>
			</div>
			<div class="form_login">
				<p> Vous n'avez pas encore de compte ?  <a class="lien_form_login" href="register.php"> Inscrivez-vous gratuitement </a> </p>
			</div>	
		</div>
	</div>	
</main>