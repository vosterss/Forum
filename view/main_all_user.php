<div class="post">
					<h1> Les utilisateur : </h1>
					<?php
						foreach ($result_m as $result){
							echo $result['id'].' - '.$result['surname']. ' - ' .$result['name']. ' - ' .$result['username']. ' - ' .$result['mail'];
                            echo $result['date_deban'] ;
                            if($result['id_droit'] == 1){
                                echo 'utilisateur banni';
                                echo '<a style="padding-left:15px;" href=index.php?p=debannir&id='.$result['id'].'>débannir</a><br>';
                               
                                
                            }
							
                            if($result['id_droit'] != 1){
                            //echo '<a style="padding-left:15px;" href=index.php?p=bannir&id='.$result['id'].'>bannir</a><br>';
                            echo '<form action="index.php?p=bannir&id='.$result['id'].'" method="POST">
                            <p> Date de débanne<input  type="date" name="date_ban" ></p>
                            <p> Heur de débanne<input  type="time" name="heur_ban" ></p>
                            <p> banne définitif<input type="checkbox" name="BANNE DEFINITF" ></p>

                            <input type="submit" id="submit" value="bannir">
                            </form>';
                            }
						}
					?>
</div>
</main>