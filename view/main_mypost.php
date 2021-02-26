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
        			<div class="post">
					<h1> Vos post : </h1>
					<?php
					
						foreach ($result_m as $result){
							if(isset($_SESSION['id'])){
								if ($_SESSION['id']== $result['id_utilisateur']){
									echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result['id'].'>delete</a><br>';
								}
									if( $_SESSION['id_droit'] == 2 ){
										echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result['id'].'>delete admin</a><br>';
									}
								}
					
							
							echo $result['titre'].' - '.$result['contenu']. ' - ' .$result['date_publication'].'<br>';
							echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
							
						}
					?>
					<div class="post">
					<h1> Vos message : </h1>
					<?php
						
						foreach ($result_r as $result){
							if(isset($_SESSION['id'])){
								if ($_SESSION['id']== $result['id_utilisateur']){
									echo '<a style="padding-left:15px;" href=index.php?p=delete_m&id='.$result['id'].'>delete</a><br>';
								}
									if( $_SESSION['id_droit'] == 2 ){
										echo '<a style="padding-left:15px;" href=index.php?p=delete_m&id='.$result['id'].'>delete admin</a><br>';
									}
								}
					
							
							echo $result['message']. ' - ' .$result['date_reponse'].'<br>';
							echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
							
						}
					
					?>

				</div>
    <php?
    	}
		if($find == 0){
	?>
			<div class="main-container">
				<?php 
					if(isset($q)){ ?>
					<h3>Aucun post trouvé pour : <?php echo $q; ?> </h3>
				<?php } ?>
				<div class="plus-recent">
					<h1> Post le plus récent </h1>
					<?php
						
						foreach ($result_R as $result1){
							if(isset($_SESSION['id'])){
								if ($_SESSION['id']== $result1['id_utilisateur']){
								echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result1['id'].'>delete</a><br>';
							}
								if( $_SESSION['id_droit'] == 2 ){
									echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result1['id'].'>delete admin</a><br>';
								}
							}
							echo $result1['username'].' - '.$result1['titre'].' - '.$result1['contenu']. ' - ' .$result1['date_publication'];
							//var_dump($result1);
							echo "<button><a href=index.php?p=voirpost&id=" .$result1['id']. ">voir le post</a></button>";
							
						}
					?>

				</div>
				<div class="plus-like">
					<h1> Post le plus liké </h1>
					<?php
						foreach ($result_L as $result2){
							if(isset($_SESSION['id'])){
							if ($_SESSION['id']== $result2['id_utilisateur']){
								echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result2['id'].'>delete</a><br>';
							}
								if( $_SESSION['id_droit'] == 2 ){
									echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result2['id'].'>delete admin</a><br>';
								}
							}
							echo $result2['username'].' - '.$result2['titre'].' - '.$result2['contenu'].' - '.$result2['nb_like']. ' - ' .$result2['date_publication'];
							if(isset($_SESSION['id'])){
								echo "<button><a href=index.php?p=voirpost&id=" .$result2['id'].">voir le post</a></button>";
							}
						}
					?>
				</div>
				<div class="plus-reponse">
					<h1> Post le plus populaire </h1>
					<?php
						foreach ($result_P as $result3) {
							if(isset($_SESSION['id'])){
							if ($_SESSION['id']== $result3['id_utilisateur']){
								echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result3['id'].'>delete</a><br>';
							}
								if( $_SESSION['id_droit'] == 2 ){
									echo '<a style="padding-left:15px;" href=index.php?p=delete&id='.$result3['id'].'>delete admin</a><br>';
								}
							}
							echo $result3['username'].' - '.$result3['titre'].' - '.$result3['contenu'].' - '.$result3['nb_mess']. ' - ' .$result3['date_publication'];
							echo "<button><a href=index.php?p=voirpost&id=" .$result3['id'].">voir le post</a></button>";
						}
					?>
				</div>	
	<?php 
		 }
	?>
</main>