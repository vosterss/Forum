
</main>
		<div class="register">
			<div class="titre_register">
				<h1> Création d'un nouveau post</h1>
			</div>
			<div class="form">
				<form action="action_create_post.php" method="post">
					
					<p> 
						<input class="form_input" type="text" name="titre" placeholder="Titre" required minlength="3" maxlength="30"/>
					</p>
					<p> 
						<input class="form_input" type="text" name="categorie" placeholder="Catégorie" required minlength="1" />
					</p>
					<p> 
						<textarea class="contenu_input" name="contenu" placeholder="écrire votre post ici" cols="150" maxlength="255" rows="5"></textarea>
					</p>
					<input class="form_input" type="submit" id='submit' value='Créer'>
				</form>
			</div>
		</div>
<main>