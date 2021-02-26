		<script>
			$(document).ready(function() {
				var wbbOpt = {
				lang: "fr"
				}
				
			$("#editor").wysibb(wbbOpt);
			});
		</script>

	<div class='post-container'>
		<div class="box-newpost">
			<div class="newpost-titre">
				<h1> Création d'un nouveau post</h1>
			</div>
			<form action="index.php?p=a_create_post" method="post">
				<input type="text" name="titre_post" placeholder="Titre">
				<div class="choix-titre">
					<div><p>Catégorie : </p></div>
					<div>
						<select name="categorie" placeholder="categorie">
						    <option value="0">Warzone</option>
						    <option value="1">Fortnite</option>
						    <option value="2">Apex</option>
						    <option value="3">PUBG</option>
						</select>
					</div>
				</div>
				<textarea id="editor" name="contenu" minlength="20"></textarea>
				<input class="form_input" type="submit" id='submit' value='Créer'>
			</form>
		</div>
	</div>
</main>c