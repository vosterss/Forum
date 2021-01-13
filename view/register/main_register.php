<main>
	<div class="register">
		<div class="titre_register">
			<h1> Register </h1>
		</div>
		<div class="form">
			<form action="action_inscription.php" method="post">
				<p> 
					<label> Prénom </label> 
					<input type="text" name="surname" required minlength="3" maxlength="30"/>
				</p>
				<p> 
					<label> Nom </label>
					<input type="text" name="name" required minlength="3" maxlength="30"/>
				</p>
				<p> 
					<label> Nom d'utilisateur </label>
					<input type="text" name="username" required minlength="3" maxlength="30"/>
				</p>
				<p>
				 	<label> Mail </label>
				 	<input type="email" name="mail"/>
				</p>
				<p> 
					<label> Mot de passe (8 caractères minimum) </label>
					<input type="text" name="password" required minlength="8"/>
				</p>
				<p> 
					<label> Date de naissance </label>
					<input type="date" name="birthday"/>
				</p>
				<p>
					<input type="submit" value="Valider"/>
				</p>
			</form>
		</div>	
	</div>
</main>