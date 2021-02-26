<?php
	require_once 'jbbcode/Parser.php';
	$titre = htmlspecialchars($_POST['titre_post']);
	$categorie = htmlspecialchars($_POST['categorie']);
	$contenu_bb = htmlspecialchars($_POST['contenu']);
	$date = date('d-m-y h:i:s');
	$parser = new JBBCode\Parser();
    $parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
    $parser->addBBCode("quote", '<blockquote>{param}</blockquote>');
    $parser->addBBCode("center", '<div align="center">{param}</div>');
 	$parser->parse($contenu_bb);
 	$contenu = $parser->getAsHtml();
	$reponse=$bdd->prepare('INSERT INTO post(titre,id_utilisateur,contenu,date_publication) VALUES (?,?,?,?)') ;
	$reponse->execute(array($titre,$id_utilisateur,$contenu,$date));
	echo '<p class="test">Votre Post : '.$titre. ' à été publié.</p>';
	header("Refresh:3; url=index.php");

?>