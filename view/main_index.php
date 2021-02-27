	<?php
	$find = 0;
		if(isset($_GET['q'])){
		    $q = htmlspecialchars($_GET['q']);
		    $articles = $bdd->query('select pos.id, pos.titre, uti.username, pos.contenu FROM post as pos, utilisateur as uti WHERE uti.id = pos.id_utilisateur AND titre LIKE "%'.$q.'%" ORDER BY pos.id DESC');
			if($articles->rowCount() > 0){
				$find = 1;
	?>
				<div class="main-container">
				    <ul>
					   	<?php 
					   		while($a = $articles->fetch()) { 
				   		?>
					      		<li>
					      			<?php echo $a['username']. '-' .$a['titre']. '-' .$a['contenu'];
									  	if(isset($_SESSION['id'])){
									  			if ($_SESSION['id']== $result1['id_utilisateur']){
													echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result1['id'].'>delete</a><br>';
												}
													else if( $_SESSION['id_droit'] == 2 ){
														echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result1['id'].'>delete admin</a><br>';
													}
												} ?>
					      			<button><a href="index.php?p=voirpost&id=<?php echo $a['id'] ; ?>">voir le post</a></button>
					      		</li>
				    	<?php 
				    		} 
			    		?>
				    </ul>
				</div>
		<?php 
			}
		}
	if($find == 0){
	?>
			<div class="main-container">
				<?php 
					if(isset($q)){ ?>
					<h3>Aucun post trouvé pour : <?php echo $q; ?> </h3>
				<?php } ?>
				<div class="plus-recent">
					<h2 class="titre-post-categorie"> Post le plus récent </h2>
					<div class="plus-recent-container">
						<?php
							foreach ($result_R as $result1){
								if(isset($_SESSION['id'])){
									if($_SESSION['id_droit'] == 2 ){
										echo '
											<div class="bouton-delete">
												<a href=index.php?p=delete&id='.$result1['id'].'>
													&times;
												</a>
											</div>';
									}
									elseif($id_utilisateur == $result1['id_utilisateur']){
										echo '
											<div class="bouton-delete">
												<button href=index.php?p=delete&id='.$result1['id'].'>
													&times;
												</button>
											</div>';
									}		
								}
								echo 
									"<div class='auteur'>
										<div class='utilisateur'>
											<img src='".$avatar."'class='img-avatar'/>
											<h3 class='titre-utilisateur'>".$result1['username']."</h3>
										</div>"."
										<div class='titre-post'>
											<h4>".$result1['titre'].'</h4>
										</div>
										<div class="vide">
										</div>
									</div>'."
									<div class='post-contenu'>".
										$result1['contenu']."
									</div>"."
									<div class='date-publication'>".
										$result1['date_publication']."
									</div>";
								echo "<a href=index.php?p=voirpost&id=" .$result1['id']. ">voir le post</a>";
							}
						?>
					</div>
				</div>
				<div class="plus-like">
					<div class="plus-like-container">
					<h2 class="titre-post-categorie"> Post le plus liké </h2>
					<?php
						foreach ($result_L as $result2){
							if(isset($_SESSION['id'])){
								if( $_SESSION['id_droit'] == 2 ){
									echo '<div class="bouton-delete"><a href=index.php?p=delete&id='.$result2['id'].'><img class="logo-delete" src="delete-logo.png"/></a></div>';
								}
								elseif ($_SESSION['id']== $result2['id_utilisateur']){
									echo '<div class="bouton-delete"><a href=index.php?p=delete&id='.$result2['id'].'><img class="logo-delete" src="delete-logo.png"/></a></div>';
								}
								
							}
							echo 
								"<div class='auteur'>
									<div class='utilisateur'>
										<img src='".$avatar."'class='img-avatar'/>
										<h3 class='titre-utilisateur'>".$result2['username']."</h3>
									</div>"."
									<div class='titre-post'>
										<h4>".$result2['titre'].'</h4>
									</div>
									<div class="vide">
									</div>
								</div>'."
								<div class='post-contenu'>".
									$result2['contenu']."
								</div>"."
								<div class='date-publication'>".
									$result2['date_publication']."
								</div>";
							if(isset($_SESSION['id'])){
								echo "<a href=index.php?p=voirpost&id=" .$result2['id']. ">voir le post</a>";
							}
						}
					?>
					</div>
				</div>
				<div class="plus-reponse">
					<div class="plus-reponse-container">
					<h2 class="titre-post-categorie"> Post le plus populaire </h2>
					<?php
						foreach ($result_P as $result3){
							if(isset($_SESSION['id'])){
								if( $_SESSION['id_droit'] == 2 ){
									echo '<div class="bouton-delete"><a href=index.php?p=delete&id='.$result3['id'].'><img class="logo-delete" src="delete-logo.png"/></a></div>';
								}
								elseif ($_SESSION['id']== $result3['id_utilisateur']){
									echo '<div class="bouton-delete"><a href=index.php?p=delete&id='.$result3['id'].'><img class="logo-delete" src="delete-logo.png"/></a></div>';
								}
								
							}
							echo 
								"<div class='auteur'>
									<div class='utilisateur'>
										<img src='".$avatar."'class='img-avatar'/>
										<h3 class='titre-utilisateur'>".$result3['username']."</h3>
									</div>"."
									<div class='titre-post'>
										<h4>".$result1['titre'].'</h4>
									</div>
									<div class="vide">
									</div>
								</div>'."
								<div class='post-contenu'>".
									$result3['contenu']."
								</div>"."
								<div class='date-publication'>".
									$result3['date_publication']."
								</div>";
							echo "<a href=index.php?p=voirpost&id=" .$result3['id']. ">voir le post</a>";
						}
					?>
					</div>
				</div>	
				<?php 
					}
		 		if(isset($result_all_post)){
			 	?>
				 <div class="post_all">
					<h1> Post De la catégorie</h1>
					<?php
						foreach ($result_all_post as $result){
							if(isset($_SESSION['id'])){
								if ($_SESSION['id'] == $result['id_utilisateur']){
									echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result['id'].'>delete</a><br>';
								}
								elseif( $_SESSION['id_droit'] == 2 ){
									echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result['id'].'>delete admin</a><br>';
								}
							}
							echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'].' - '.$result['nb_like']. " - " .$result['nb_mess']. ' - ' .$result['date_publication'];
							echo "<button><a href=index.php?p=voirpost&id=" .$result['id'].">voir le post</a></button>";
						}
					?>
				</div>
			<?php 
				}  
			?>
			</div>
</main>