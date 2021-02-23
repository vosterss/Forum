		<script>
			$(function() {
			  $("#editor").wysibb();
			})
		</script>

	<div class='post-container'>
		<div class="box-newpost">
			<div class="newpost-titre">
				<h1> Création d'un nouveau post</h1>
			</div>
			<form action="action_create_post.php" method="post">
				<input type="text" name="titre_post" placeholder="Titre">
				<div>
					<select name="categorie" placeholder="categorie">
						<option value="">Catégories</option>
					    <option value="0">Warzone</option>
					    <option value="1">Fortnite</option>
					    <option value="2">Apex</option>
					    <option value="3">PUBG</option>
					</select>
				</div>
				<textarea id="editor"></textarea>
				<input class="form_input" type="submit" id='submit' value='Créer'>
			</form>
		</div>
	</div>
</main>