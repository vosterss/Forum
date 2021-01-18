<main>	
	<div class='page_acceuil'>
		<section class="textoverpic">
			<h1>warzone</h1>
			<div>
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
					$reponse = $bdd->query('select uti.username, pos.catégorie , pos.id, pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=0');
					$reponse->execute(array('M','24'));
					$results = $reponse->fetchAll();
					foreach ($results as $result) {
						echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
						if($_SESSION!==''){
							echo '<astyle="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
						}
					}
				?>
			</div>
		</section>
		<section>
			<h1>fortnite</h1>
			<div>
				<?php
					$reponse = $bdd->query('select uti.username, pos.catégorie, pos.id, pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=1');
					$reponse->execute(array('M','24'));
					$results = $reponse->fetchAll();
					foreach ($results as $result) {
						echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
						if($_SESSION!==''){
							echo '<astyle="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
						}
					}
				?>	
			</div>
		</section>

		<section class="pop">
			<h1>pubg</h1>
			<div>
				<?php
					$reponse = $bdd->query('select uti.username, pos.catégorie, pos.id, pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=2');
					$reponse->execute(array('M','24'));
					$results = $reponse->fetchAll();
					foreach ($results as $result) {
						echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
						if($_SESSION!==''){
							echo '<astyle="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
						}
					}
				?>	
			</div>
		</section>

		<section>
			<h1>apex</h1>
			<div>
				<?php
					$reponse = $bdd->query('select uti.username,pos.catégorie, pos.id, pos.titre, pos.contenu from utilisateur as uti inner join post as pos on uti.id = pos.id_utilisateur where pos.catégorie=3');
					$reponse->execute(array('M','24'));
					$results = $reponse->fetchAll();
					foreach ($results as $result) {
						echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'].'<br>';
						if($_SESSION!==''){
							echo '<astyle="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
						}
					}
				?>	
			</div>
		</section>
		<section>
			
		</section>
	</div>
</main>