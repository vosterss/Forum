<main>
	<div class="register">
		<div class="titre_register">
			<h1> Inscription </h1>
		</div>
		<div class="form">
			<form action="action_inscription.php" method="post">
				<p> 
					<input type="text" name="surname" placeholder="Prénom" required minlength="3" maxlength="30"/>
				</p>
				<p> 
					<input type="text" name="name" placeholder="Nom" required minlength="3" maxlength="30"/>
				</p>
				<p> 
					<input type="text" name="username" placeholder="Nom d'utilisateur" required minlength="3" maxlength="30"/>
				</p>
				<p>
				 	<input type="email" name="mail" placeholder="Adresse email"/>
				</p>
				<p> 
					<input type="password" name="password" placeholder="Mot de passe" required minlength="8"/>
				</p>
				<div class="form_birthday">
					<div class="form_birthday_titre">
						<label> Date de naissance </label>
					</div>
					<div class="form_birthday_date">
						<input type="date" name="birthday"/>
					</div>	
				</div>
				<div class="form_submit">
					<input type="submit" value="S'inscrire"/>
				</div>
			</form>
		</div>	
	</div>
</main>