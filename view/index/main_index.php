<main>	
	<div class='page_acceuil'>
		<section class="textoverpic">
			
			<div>
				<div class="top">
					<h1 style="font-size:3em;">Warzone</h1>
					<h3> Dernier Post</h3>
				</div>
				<?php
					$dsn='mysql:host=localhost;dbname=forum';
					$user='root';
					$pass='' ;
					$_SESSION='';
					try{
						$bdd = new PDO($dsn, $user, $pass);
					}
					catch(PDOException $e){
						die ('erreur :' .$e->getMessage());
					}
					$reponse = $bdd->query('select uti.username, pos.catégorie , max(pos.id), pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=0');
					$reponse->execute(array('M','24'));
					$results = $reponse->fetchAll();
					foreach ($results as $result) {
						echo "<div id='post_index'>"  .$result['titre'].' <br> ' .$result['username'].' <br> '.$result['contenu'];
						if($_SESSION!==''){
							echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
						}
					}
				?>
			</div>
		</section>
		<section>
			<h1>fortnite</h1>
			<div>
				<?php
					$reponse = $bdd->query('select uti.username, pos.catégorie, max(pos.id), pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=1');
					$reponse->execute(array('M','24'));
					$results = $reponse->fetchAll();
					foreach ($results as $result) {
						echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
						if($_SESSION!==''){
							echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
						}
					}
				?>	
			</div>
		</section>

		<section class="pop">
			<h1>pubg</h1>
			<div>
				<h1> Dernier Post</h1>
				<?php
					$reponse = $bdd->query('select uti.username, pos.catégorie, max(pos.id), pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=2');
					$reponse->execute(array('M','24'));
					$results = $reponse->fetchAll();
					foreach ($results as $result) {
						echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
						if($_SESSION!==''){
							echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
						}
					}
				?>	
			</div>
		</section>

		<section>
			<h1>apex</h1>
			<div>
				<?php
					$reponse = $bdd->query('select uti.username,pos.catégorie, max(pos.id), pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=3');
					$reponse->execute(array('M','24'));
					$results = $reponse->fetchAll();
					foreach ($results as $result) {
						echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'].'<br>';
						if($_SESSION!==''){
							echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
						}
					}
				?>	
			</div>
		</section>
		<section>
			
		</section>
	</div>
</main>