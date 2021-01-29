	<?php
		if(isset($_GET['q'])){
		    $q = htmlspecialchars($_GET['q']);
		    $articles = $bdd->query('select pos.titre, uti.username, pos.contenu FROM post as pos, utilisateur as uti WHERE uti.id = pos.id_utilisateur AND titre LIKE "%'.$q.'%" ORDER BY pos.id DESC');
			if($articles->rowCount() > 0) { 
		?>
		<div class="main-container">
		    <ul>
		   <?php while($a = $articles->fetch()) { ?>
		      		<li>
		      			<?= $a['titre']. ' - ' .$a['username'].'<br>' .$a['contenu'] ?>
		      		</li>
		    <?php } ?>
		    </ul>
		</div>
	<?php } else { ?>
		<div class="main-container">
			<p>Il n'y a aucun resultat pour votre recherche</p>
			<div class="plus-recent">
				<h1> Post le plus récent </h1>
			</div>
			<div class="plus-like">
				<h1> Post le plus liké </h1>
			</div>
			<div class="plus-reponse">
				<h1> Post le plus populaire </h1>
			</div>	
		</div>
	<?php } }
	else{
	?>
	<div class="main-container">
		<div class="plus-recent">
			<h1> Post le plus récent </h1>
		</div>
		<div class="plus-like">
			<h1> Post le plus liké </h1>
		</div>
		<div class="plus-reponse">
			<h1> Post le plus populaire </h1>
		</div>	
	</div>
	<?php } ?>
</main>