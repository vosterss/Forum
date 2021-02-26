<div class="post">
					<h1> Les utilisateur : </h1>
					<?php
						foreach ($result_m as $result){
							echo $result['id'].' - '.$result['surname']. ' - ' .$result['name']. ' - ' .$result['username']. ' - ' .$result['mail'];
                            if($result['id_droit'] == 1){
                                echo 'utilisateur banni';
                                echo '<a style="padding-left:15px;" href=index.php?p=debannir&id='.$result['id'].'>débannir</a><br>';
                            }
							
                            if($result['id_droit'] != 1){
                            echo '<a style="padding-left:15px;" href=index.php?p=bannir&id='.$result['id'].'>bannir</a><br>';}
                            	
						}
					?>
</div>
</main>