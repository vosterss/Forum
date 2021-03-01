<div class="main-cont">
    <div class='cont'>
					<h1> Les utilisateurs </h1>
					<?php
						foreach ($result_m as $result){
							
                            echo 
								"<div class='user'>
                                <div class='plus-like-container'>
                                <div class='auteur'>
									<div class='utilisateur'>
										<img src='".$result['avatar']."'class='img-avatar'/>
										<h3 class='titre-utilisateur'>".$result['username']."</h3>
									</div>"."
									<div class='titre-post'>
										<h4>".$result['name'].' - '.$result['surname'].'</h4>
									</div>
									<div class="vide">
									</div>
								</div>'."
								<div class='post-contenu'>".
									$result['mail']."
								</div>"."
								<div class='date-publication'>".
									$result['date_deban']."
								</div>";
                            if($result['id_droit'] == 1){
                                echo ' utilisateur banni ';
                                echo '<a style="padding-left:15px;" href=index.php?p=debannir&id='.$result['id'].'>débannir</a><br>';
                                echo '</div>';
                                echo '</div>';
                               
                                
                            }else if($result['id_droit'] == 3){
                                echo ' utilisateur banni définitivement ';
                                echo '<a style="padding-left:15px;" href=index.php?p=debannir&id='.$result['id'].'>débannir</a><br>';
                                echo '</div>';
                                echo '</div>';
                               
                                
                            }
							
                            else if($result['id_droit'] != 1 || $result['id_droit'] != 3 ){
                            //echo '<a style="padding-left:15px;" href=index.php?p=bannir&id='.$result['id'].'>bannir</a><br>';
                            echo '<form action="index.php?p=bannir&id='.$result['id'].'" method="POST">
                            <p> Date de déban<input  type="date" name="date_ban" ></p>
                            <p> Heure de déban<input  type="time" name="heur_ban" ></p>
                            <p> ban définitif<input type="checkbox" name="ban_def" ></p>
                            <input type="submit" id="submit" value="bannir">
                            </form>';
                            echo '</div>';
                            echo '</div>';
                            }
                           
						}
					?>
        </div>
</div>
</main>