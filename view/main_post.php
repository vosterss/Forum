		<script>
			$(function() {
			  $("#editor").wysibb();
			})
		</script>

	<div class='post-container'>
		<div class="register">
			<div class="titre_register">
				<h1> Création d'un nouveau post</h1>
			</div>
			<form action="action_create_post.php" method="post">
				<textarea id="editor"></textarea>
				<input class="form_input" type="submit" id='submit' value='Créer'>
				
			</form>
		</div>
	</div>
</main>