<main>
	<div class="register">
		<div class="titre_register">
			<h1> Inscription </h1>
		</div>
		<div class="form">
			<form action="action_inscription.php" method="post">
				<p> 
					<input type="text" name="surname" required minlength="3" maxlength="30"/>
				</p>
				<p> 
					<input type="text" name="name" required minlength="3" maxlength="30"/>
				</p>
				<p> 
					<input type="text" name="username" required minlength="3" maxlength="30"/>
				</p>
				<p>
				 	<input type="email" name="mail"/>
				</p>
				<p> 
					<input type="password" name="password" required minlength="8"/>
				</p>
				<p> 
					<label> Date de naissance </label>
					<input type="date" name="birthday"/>
				</p>
				<p>
					<input type="submit" value="S'inscrire"/>
				</p>
			</form>
		</div>	
	</div>
</main>