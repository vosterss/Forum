<script> 
		tinymce.init({
	        selector: '#editor'
	     	 });
</script>
	<div class="main-container">
		<div class="modif">
			<form method="POST" action="index.php?p=a_modif&id=<?php echo $_GET['id'];?>">
				<h2>Modifier votre message</h2>
				<textarea id="editor" name="message" minlength="20"></textarea>
				<input class="form_input" type="submit" id='submit' value='modifier'>
			</form>
		</div>	
	</div>
</main>