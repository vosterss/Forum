<script> 
		tinymce.init({
	        selector: '#editor'
	     	 });
</script>
<?php
foreach($comm as $value){
	echo html_entity_decode($value['message']);
}
?>
<form method="POST" action="index.php?p=a_modif&id=<?php echo $_GET['id'];?>">

	<p>modifier votre message :</p>
	<textarea id="editor" name="message" minlength="20"></textarea>
	<input class="form_input" type="submit" id='submit' value='modifier'>

</form>


</main>