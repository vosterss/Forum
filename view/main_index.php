	<?php
		if(isset($_GET['q'])){
		    $q = htmlspecialchars($_GET['q']);
		    $articles = $bdd->query('select pos.titre, uti.username, pos.contenu FROM post as pos, utilisateur as uti WHERE uti.id = pos.id_utilisateur AND titre LIKE "%'.$q.'%" ORDER BY pos.id DESC');
			if($articles->rowCount() > 0){
	?>
				<div class="main-container">
				    <ul>
					   	<?php 
					   		while($a = $articles->fetch()) { 
				   		?>
					      		<li>
					      			<?='<h2>' .$a['titre']. ' - ' .$a['username'].'<br><br>' .$a['contenu']. '</h2>' ?>
					      		</li>
				    	<?php 
				    		} 
			    		?>
				    </ul>
				</div>
		<?php 
			} 
			else { 
		?>
				<div class="main-container">
					<div class="plus-recent">
						<h1> Post le plus récent </h1>
						<?php
							foreach ($result_R as $result1){
								echo $result1['username'].' - '.$result1['titre'].' - '.$result1['contenu'];
								if(isset($_SESSION['id'])){
									echo '<a style="padding-left:15px;" href="delete.php?id='.$result1['id'].'">delete</a><br>';
								}
							}
						?>
					</div>
					<div class="plus-like">
						<h1> Post le plus liké </h1>
						<?php
							foreach ($result_L as $result2){
								echo $result2['username'].' - '.$result2['titre'].' - '.$result2['contenu'].' - '.$result2['nb_like'];
								if(isset($_SESSION['id'])){
									echo '<a style="padding-left:15px;" href="delete.php?id='.$result2['id'].'">delete</a><br>';
								}
							}
						?>
					</div>
					<div class="plus-reponse">
						<h1> Post le plus populaire </h1>
						<?php
							foreach ($result_P as $result3) {
								echo $result3['username'].' - '.$result3['titre'].' - '.$result3['contenu'].' - '.$result3['nb_mess'];
								if(isset($_SESSION['id'])){
									echo '<a style="padding-left:15px;" href="delete.php?id='.$result3['id'].'">delete</a><br>';
								}
							}
						?>
					</div>	
				</div>
	<?php 
			} 
		}
		else{
	?>
			<div class="main-container">
					<div class="plus-recent">
						<h1> Post le plus récent </h1>
						<?php
							foreach ($result_R as $result1){
								echo $result1['username'].' - '.$result1['titre'].' - '.$result1['contenu']. ' - ' .$result1['date_publication'];
								if(isset($_SESSION['id'])){
									echo '<a style="padding-left:15px;" href="delete.php?id='.$result1['id'].'">delete</a><br>';
								}
							}
						?>
					</div>
					<div class="plus-like">
						<h1> Post le plus liké </h1>
						<?php
							foreach ($result_L as $result2){
								echo $result2['username'].' - '.$result2['titre'].' - '.$result2['contenu'].' - '.$result2['nb_like']. ' - ' .$result2['date_publication'];
								if(isset($_SESSION['id'])){
									echo '<a style="padding-left:15px;" href="delete.php?id='.$result2['id'].'">delete</a><br>';
								}
							}
						?>
					</div>
					<div class="plus-reponse">
						<h1> Post le plus populaire </h1>
						<?php
							foreach ($result_P as $result3) {
								echo $result3['username'].' - '.$result3['titre'].' - '.$result3['contenu'].' - '.$result3['nb_mess']. ' - ' .$result3['date_publication'];
								if(isset($_SESSION['id'])){
									echo '<a style="padding-left:15px;" href="delete.php?id='.$result3['id'].'">delete</a><br>';
								}
							}
						?>
					</div>	
				</div>
	<?php 
		} 
	?>
</main>