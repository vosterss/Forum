	<script> 
		tinymce.init({
	        selector: '#editor'
	     	 });
	</script>
	<div class="main-container">
		<h1> Post </h1>
		<div class="view-post">
			<div>
				<?php
					foreach ($post as $value) {
						if(isset($_SESSION['id'])){
							if($_SESSION['id_droit'] == 2 ){
								echo '
									<div class="bouton-delete">
										<a href=index.php?p=delete&id='.$value['id'].'>
											&times;
										</a>
									</div>';
							}
							elseif($id_utilisateur == $result1['id_utilisateur']){
								echo '
									<div class="bouton-delete">
										<button href=index.php?p=delete&id='.$value['id'].'>
											&times;
										</button>
									</div>';
							}		
						}
						echo "
							<div class='auteur'>
								<div class='utilisateur'>
									<img src='".$value['avatar']."'class='img-avatar'/>
									<h3 class='titre-utilisateur'>".$value['username']."</h3>
								</div>"."
								<div class='titre-post'>
									<h4>".$value['titre'].'</h4>
								</div>
								<div class="vide">
								</div>
							</div>'."
							<div class='post-contenu'>".
								$value['contenu']."
							</div>"."
							<div class='date-publication'>".
								$value['date_publication']."
							</div>
							<div class='nb-like'>
								<p> Like : </p>".
								$value['nb_like']."
							</div>";
						
						if(isset($_SESSION['like'])){
							if ($_SESSION['like'] == 0){
								echo '<a href=index.php?p=nblike&id='.$value['id'].'><div class="fa fa-heart-o"></div></a><br>';
								$modif_post = (strip_tags($value['contenu']));
							}
							$_SESSION['like']=0;
						}
					}
				?>
			</div>
			<h1> Réponse </h1>
			<div class="reponse">
				<?php
					foreach ($comm as $value){
						if(isset($_SESSION['id'])){
							if ($_SESSION['id'] == $value['id_utilisateur'] && $post[0]['isclosed'] != 1){
								echo '
									<div class="bouton-delete">
										<a href=index.php?p=delete&id='.$value['id'].'>
											&times;
										</a>
									</div>';
								echo '
									<div class="bouton-delete">
										<a href=index.php?p=modif&id='.$value['id'].'>
											Modifier
										</a>
									</div>';
								
							}
							else if( $_SESSION['id_droit'] == 2 ){
								echo '
									<div class="bouton-delete">
										<a href=index.php?p=delete&id='.$value['id'].'>
											&times;
										</a>
									</div>';
							}
							}
							echo "
							<div class='mymess2'>
								<div class='auteur'>
									<div class='utilisateur'>
										<img src='".$value['avatar']."'class='img-avatar'/>
										<h3 class='titre-utilisateur'>".$value['username']."</h3>
									</div>
									<div class='vide'>
									</div>
								</div>
								<div class='mess-contenu'>".
									html_entity_decode($value['message'])."
								</div>"."
								<div class='date-publication'>".
									$value['date_reponse']."
								</div>
							</div>";
						?>	
						
				<?php
					}
				if (isset($_SESSION['id'])){
					if($post[0]['isclosed'] == 1){ 
				?>
					<p>Le Post est clos</p>
					<?php
						 if($id_droit == 2){
					?>
							<p><a href="index.php?p=a_statut_post&id_post=<?php echo $post[0]['id'];?>&action=ouvrir">Reouvrir le topic</a></p>
					<?php
						}
						}else{ 
					?>
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
		</div>		
	</div>
</main>