<script>
	$(document).ready(function() {
		var wbbOpt = {
		lang: "fr"
		}
		$("#editor").wysibb(wbbOpt);
	});
</script>
<?php
foreach($comm as $value){
	echo $value['message'];
}
echo $_GET['id'];
?>
<form method="POST" action="index.php?p=a_modif&id=<?php echo $_GET['id'];?>">

	<p>modifier votre message :</p>
	<textarea id="editor" name="message" minlength="20"></textarea>
	<input class="form_input" type="submit" id='submit' value='modifier'>

</form>


</main>