<?php include 'models\sendemail.php'; ?>

<?php echo $alert; ?>
		<footer>
			<h2>Contactez-nous</h2>
			<form id= 'connect' action="" method="post">
				<input name="name" class="text-box" placeholder='nom' required>									
				<input name="email" class="text-box" placeholder='E-mail'required>									
				<textarea name='message'placeholder='Votre message ici...' required></textarea>
				<input type="submit" name="submit" class="send-btn" value="envoyé" required>								
			</form>
			<div id='trait2'></div>	
			<div id='lien'>
				<div id="bouton">
					<ul id="navigation">
						<li><a href="" title="">Présentation</a></li>
						<li><a href="" title="">Warzone</a></li>
						<li><a href="" title="">Fortnite</a></li>
						<li><a href="" title="">Pubg</a></li>
					</ul>
				</div>
				<div id="bouton1">
					<ul id="navigation">
						<li><a href="" title="">Présentation</a></li>
						<li><a href="" title="">Warzone</a></li>
						<li><a href="" title="">Fortnite</a></li>
						<li><a href="" title="">Pubg</a></li>
					</ul>
				</div>
				<div id="bouton2">
					<ul id="navigation">
						<li><a href="" title="">Présentation</a></li>
						<li><a href="" title="">Warzone</a></li>
						<li><a href="" title="">Fortnite</a></li>
						<li><a href="" title="">Pubg</a></li>
					</ul>
				</div>
			</div>		
			<div id='copyrighteticons'>
				<div id='copyright' >
					<span>© fromSratch();2021</span>
				</div>
				<div id='icons'>
					<a href="http://www.twitter.fr"><i class="fa fa-twitter"></i></a>
					<a href="http://www.facebook.fr"><i class="fa fa-facebook"></i></a>
					<a href="http://www.twitch.com"><i class="fa fa-twitch"></i></a>
					<a href="http://www.instagrm.com"><i class="fa fa-instagram"></i></a>
					<a href="http://www.google.com"><i class="fa fa-google"></i></a>
				</div>	
			</div>
		</footer>
	</body>
</html>