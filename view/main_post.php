	<script>
		$(document).ready(function() {
				var wbbOpt = {
				lang: "fr"
				}
			$("#editor").wysibb(wbbOpt);
			});
	</script>
	
	<h1> Post </h2>
	<div>

		<?php
			foreach ($post as $value) {
				if(isset($_SESSION['id'])){
					if ($_SESSION['id']== $value['id_utilisateur']){
					  echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$value['id'].'>delete</a><br>';
				  }
					  else if( $_SESSION['id_droit'] == 2 ){
						  echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$value['id'].'>delete admin</a><br>';
					  }
				  }
				echo $value['username'], $value['titre'],$value['contenu'],$value['date_publication'].' - '. $value['nb_like'].'<br>';
				if(isset($_SESSION['like'])){
					if ($_SESSION['like'] == 0){
						echo '<a style="padding-left:15px;" href=index.php?p=nblike&id='.$value['id'].'><div class="fa fa-heart-o"></div></a><br>';
						$modif_post = (strip_tags($value['contenu']));
					}
				}
				
				
				
			
			}
		?>
	</div>
	<h1> Réponse </h1>
	<div>
		<?php
			##var_dump($comm);
			
			foreach ($comm as $value) {
				if(isset($_SESSION['id'])){
					if ($_SESSION['id']== $value['id_utilisateur']){
						echo '<a style="padding-left:15px;" href=index.php?p=delete_m&id='.$value['id'].'>delete</a><br>';
						echo '<a style="padding-left:15px;" href=index.php?p=modif&id='.$value['id'].'>modifier</a><br>';
					}
						if( $_SESSION['id_droit'] == 2 ){
							echo '<a style="padding-left:15px;" href=index.php?p=delete_m&id='.$value['id'].'>delete admin</a><br>';
						}
					} ?>
				<div class="commentaire">
					<div class="username">
						<?php echo $value['username'];?>
					</div> 
					<div class="contenu">
						<?php echo $value['message'];
						$modif_mess = strip_tags($value['message']); ?>
					</div>
					<div class="date">
						<?php echo $value['date_reponse'];?>
				
					</div>
				</div>
				
		<?php
			}
		if($post[0]['isclosed'] == 1){ ?>
			<p>Le Post est clos</p>

		<?php
			if($id_droit == 2){ ?>
				<p><a href="index.php?p=a_statut_post&id_post=<?php echo $post[0]['id'];?>&action=ouvrir">Reouvrir le topic</a></p>
		<?php
			}
		} 
		else{ 
			if($post[0]['isclosed'] == 1){ ?>
				
			<?php } 
			else{ ?>
		
	</div>
	<h2> Répondez : </h2>
			<form action="index.php?p=a_create_comm&id=<?php echo $id_post;?>" method="post">
				<textarea id="editor" name="message" minlength="20" placeholder='votre réponse'>
				</textarea>
				<input class="form_input" type="submit" id='submit' value='envoyer réponse'>
			</form>
		<?php
			if($id_droit == 2){ ?>
				<p><a href="index.php?p=a_statut_post&id_post=<?php echo $post[0]['id'];?>&action=fermer">Fermer le topic</a></p>
		<?php } } } ?>
</main>