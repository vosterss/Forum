
	<meta charset="utf-8" />
	<?php
	 
	$bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8','root','root');
	 
	$articles = $bdd->query('SELECT titre FROM post ORDER BY id DESC');
	if(isset($_GET['q']) AND !empty($_GET['q'])) {
	   $q = htmlspecialchars($_GET['q']);
	   $articles = $bdd->query('SELECT titre FROM post WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
	   if($articles->rowCount() == 0) {
	      $articles = $bdd->query('SELECT titre FROM post WHERE CONCAT(titre, contenu) LIKE "%'.$q.'%" ORDER BY id DESC');
	   }
	}
	?>
	<form method="GET">
	   <input type="search" name="q" placeholder="Recherche..." />
	   <input type="submit" value="Valider" />
	</form>
	<?php if($articles->rowCount() > 0) { ?>
	   <ul>
	   <?php while($a = $articles->fetch()) { ?>
	      <li><?= $a['titre'] ?></li>
	   <?php } ?>
	   </ul>
	<?php } else { ?>
	Aucun résultat pour: <?= $q ?>...
	<?php } ?>