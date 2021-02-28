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
    if ($result_m != 0){
        
		?>
		<div class="main-cont">
		<div class="cont">
        			
					<h1> Vos posts : </h1>
					<?php
						foreach ($result_m as $result){
                            echo 
								"<div class='mespost'>
                                <div class='plus-like-container'>
									<div class='post-contenu'>
										<h4>Titre : ".$result['titre']."</h4>
									</div>"."
								<div class='post-contenu'>Contenu : ".$result['contenu']."
								</div>"."
								<div class='date-publication'>Date : ".$result['date_publication']."
								</div>";
								echo '<div class="bouton-delete"><a href=index.php?p=delete&id='.$result['id'].'><img class="logo-delete" src="delete-logo.png"/></a></div>';
								echo "<a href=index.php?p=voirpost&id=" .$result['id']. ">voir le post</a>";
								echo '</div>';
								echo '</div>';

                            } ?>
					<h1> Vos messages : </h1>
				
							<?php
						foreach ($result_r as $result){
                            echo 
								"<div class='mespost'>
                                <div class='plus-like-container'>
								<div class='post-contenu'>Contenu : ".$result['message']."
								</div>"."
								<div class='date-publication'>Date : ".$result['date_reponse']."
								</div>";
								echo '<div class="bouton-delete"><a href=index.php?p=delete&id='.$result['id'].'><img class="logo-delete" src="delete-logo.png"/></a></div>';
								echo '</div>';
								echo '</div>';

                            } ?>	
					</div>	
					</div>	
					<?php } ?>
</main>