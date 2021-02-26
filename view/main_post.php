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
			//var_dump($post);
			foreach ($post as $value) {
				echo $value['username'], $value['titre'],$value['contenu'],$value['date_publication'].'<br>';
				strip_tags($value['contenu']);
				echo $value['contenu'];
			}
		?>
	</div>
	<h1> Réponse </h1>
	<div>
		<?php
			##var_dump($comm);
			
			foreach ($comm as $value) { ?>
				<div class="commentaire">
					<div class="username">
						<?php echo $value['username'];?>
					</div> 
					<div class="contenu">
						<?php echo $value['message'];
						$modif_mess = strip_tags($value['message']); ?>
					</div>
					<div class="date">
						<?php echo $value['date_reponse'];
						if($id_utilisateur == $value['id']){ ?> - <a href="">modidier</a> - <a href="">suprimer</a>    <?php }?>
					</div>
				</div>
				
		<?php
			}
		?>
	</div>
	<h2> Répondez : </h2>
			<form action="index.php?p=a_create_comm&id=<?php echo $id_post;?>" method="post">
				<textarea id="editor" name="message" minlength="20" placeholder='votre réponse'>
				</textarea>
				<input class="form_input" type="submit" id='submit' value='envoyer réponse'>
			</form>
</main>