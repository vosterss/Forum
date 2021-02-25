	<div>
		<p> Votre avatar </p>
		<img src='<?php echo $avatar ; ?>' class="change_avatar" alt=""/>
		<p> choix avatar </p>
		<a href="index.php?p=avatar&id_avatar=0">
			<img src="images/avatar1.jpg" class="change_avatar" alt=""/>
		</a>
		<a href="index.php?p=avatar&id_avatar=1">
			<img src="images/avatar2.jpg" class="change_avatar" alt=""/>
		</a>	
		<a href="index.php?p=avatar&id_avatar=2">
			<img src="images/avatar3.jpg" class="change_avatar" alt=""/>
		</a>	
		<a href="index.php?p=avatar&id_avatar=3">
			<img src="images/avatar4.jpg" class="change_avatar" alt=""/>
		</a>	
		<a href="index.php?p=avatar&id_avatar=4">
			<img src="images/avatar5.jpg" class="change_avatar" alt=""/>
		</a>
		<p>OU importez le votre</p>
		<form method="POST" action="index.php?p=a_importation" enctype="multipart/form-data">	
			 <input type="hidden" name="MAX_FILE_SIZE" value="400000">
			<input type="file" name="importation" accept="images/jpg,images/png">
			<input type="submit" name="envoyer" value="importer">
		</form>
	</div>
</main>