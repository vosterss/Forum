<div class="post">
					<h1> Les utilisateur : </h1>
					<?php
					
						foreach ($result_m as $result){
					
							
							echo $result['id'].' - '.$result['surname']. ' - ' .$result['name']. ' - ' .$result['username']. ' - ' .$result['mail'].'<br>';
							echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
							
						}
					?>

				</div>
                </main>