	
	<form action="index.php?p=a_change_mdp" method="post">
		<p> 
			<input class="form_input" type="password" name="password" placeholder="Mot de passe" required minlength="8"/>
		</p>
		<p> 
			<input class="form_input" type="password" name="new_password1" placeholder="Nouveau mot de passe" required minlength="8"/>
		</p>
		<p> 
			<input class="form_input" type="password" name="new_password2" placeholder="Confirmer nouveau mot de passe" required minlength="8"/>
		</p>
		<div class="form_submit">
			<input class="form_input" type="submit" value="Confirmer"/>
		</div>
	</form>
</main>