	<div class="main-container">
		<div class="plus-recent">
			<h1> Post le plus récent </h1>
			<?php
				require 'models/action_list_post_recent.php';
				foreach ($results as $result) {
					echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
					if($_SESSION!==''){
					echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
					}
				}
			?>
		</div>
		<div class="plus-like">
			<h1> Post le plus liké </h1>
		</div>
		<div class="plus-reponse">
			<h1> Post le plus populaire </h1>
		</div>	
	</div>	
</main>