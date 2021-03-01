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
					      			<div class="resultat-recherche">
						      			<div class="recherche">
						      			<?php 
							      			if(isset($_SESSION['id'])){
												if($_SESSION['id_droit'] == 2 ){
													echo '
														<div class="bouton-delete">
															<a href=index.php?p=delete&id='.$a['id'].'>
																&times;
															</a>
														</div>';
												}
												elseif($id_utilisateur == $a['id_utilisateur']){
													echo '
														<div class="bouton-delete">
															<a href=index.php?p=delete&id='.$a['id'].'>
																&times;
															</a>
														</div>';
												}		
											}
						      				echo "
						      					<div class='auteur'>
													<div class='utilisateur'>
														<img src='".$a['avatar']."'class='img-avatar'/>
														<h3 class='titre-utilisateur'>".$a['username']."</h3>
													</div>"."
													<div class='titre-post'>
														<h4>".$a['titre'].'</h4>
													</div>
													<div class="vide">
													</div>
												</div>'."
												<div class='post-contenu'>".
													$a['contenu']."
												</div>"."
												<div class='date-publication'>".
													$a['date_publication']."
												</div>";
										  		
						      				echo "<a href=index.php?p=voirpost&id=" .$a['id']. ">voir le post</a>";
						      			?>
						      			</div>
						      		</div>
					      		</li>
				    	<?php 
				    		} 
			    		?> 
		    		?>
			    </ul>
			</div>
	<?php 
		}
	}
	if ($result_m != 0){
	?>
		<div class="main-container">
			<h1> Vos posts : </h1>
			<?php
				foreach ($result_m as $result){
			?>
				<?php
					if($_SESSION['id_droit'] == 2 ){
						echo "
						<div class='mypost'>
							<div class='bouton-delete'>
								<a href=index.php?p=delete_m&id=".$result['id'].">
									&times;
								</a>
							</div>
		                	<div class='auteur'>
								<div class='utilisateur'>
									<img src='".$avatar."'class='img-avatar'/>
									<h3 class='titre-utilisateur'>".$username."</h3>
								</div>"."
								<div class='titre-post'>
									<h4>".$result['titre'].'</h4>
								</div>
								<div class="vide">
								</div>
							</div>'."
							<div class='post-contenu'>".
								$result['contenu']."
							</div>"."
							<div class='date-publication'>".
								$result['date_publication']."
							</div>
						</div>";

					}
					elseif($id_utilisateur == $result['id_utilisateur']){
						echo "
						<div class='mypost'>
							<div class='bouton-delete'>
								<a href=index.php?p=delete_m&id=".$result['id'].">
									&times;
								</a>
							</div>
		                	<div class='auteur'>
								<div class='utilisateur'>
									<img src='".$avatar."'class='img-avatar'/>
									<h3 class='titre-utilisateur'>".$username."</h3>
								</div>"."
								<div class='titre-post'>
									<h4>".$result['titre'].'</h4>
								</div>
								<div class="vide">
								</div>
							</div>'."
							<div class='post-contenu'>".
								$result['contenu']."
							</div>"."
							<div class='date-publication'>".
								$result['date_publication']."
							</div>
						</div>";
					}		
	                else{
	                	echo "
		                <div class='mypost'>
		                	<div class='auteur'>
								<div class='utilisateur'>
									<img src='".$avatar."'class='img-avatar'/>
									<h3 class='titre-utilisateur'>".$username."</h3>
								</div>"."
								<div class='titre-post'>
									<h4>".$result['titre'].'</h4>
								</div>
								<div class="vide">
								</div>
							</div>'."
							<div class='post-contenu'>".
								$result['contenu']."
							</div>"."
							<div class='date-publication'>".
								$result['date_publication']."
							</div>
						</div>";
					}	
                } 
            ?>
				<h1> Vos messages : </h1>
				
			<?php
				foreach ($result_r as $result){
			?>	
				<?php		
					if($_SESSION['id_droit'] == 2 ){
						echo "
						<div class='mymess'>
							<div class='bouton-delete'>
								<a href=index.php?p=delete_m&id=".$result['id'].">
									&times;
								</a>
							</div>
	                    	<div class='auteur'>
								<div class='utilisateur'>
									<img src='".$avatar."'class='img-avatar'/>
									<h3 class='titre-utilisateur'>".$username."</h3>
								</div>"."
								<div class='vide'>
								</div>
							</div>"."
							<div class='mess-contenu'>".
								$result['message']."
							</div>"."
							<div class='date-publication'>".
								$result['date_reponse']."
							</div>
						</div>";
					}
					elseif($id_utilisateur == $result['id_utilisateur']){
						echo "
						<div class='mymess'>
							<div class='bouton-delete'>
								<a href=index.php?p=delete_m&id=".$result['id'].">
									&times;
								</a>
							</div>
	                    	<div class='auteur'>
								<div class='utilisateur'>
									<img src='".$avatar."'class='img-avatar'/>
									<h3 class='titre-utilisateur'>".$username."</h3>
								</div>"."
								<div class='vide'>
								</div>
							</div>"."
							<div class='mess-contenu'>".
								$result['message']."
							</div>"."
							<div class='date-publication'>".
								$result['date_reponse']."
							</div>
						</div>";
					}		
                    else{
                    	echo "
	                    <div class='mymess'>
	                    	<div class='auteur'>
								<div class='utilisateur'>
									<img src='".$avatar."'class='img-avatar'/>
									<h3 class='titre-utilisateur'>".$username."</h3>
								</div>"."
								<div class='vide'>
								</div>
							</div>"."
							<div class='mess-contenu'>".
								$result['message']."
							</div>"."
							<div class='date-publication'>".
								$result['date_reponse']."
							</div>
						</div>";
					}
				}
 				?>	
		</div>	
<?php 
	} 
?>
</main>