<?php
	$id_post = $_GET['id'];
	$message_bb = htmlspecialchars($_POST['message']);
	require_once 'jbbcode/Parser.php';
	$parser = new JBBCode\Parser();
	$parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
    $parser->addBBCode("quote", '<blockquote>{param}</blockquote>');
    $parser->addBBCode("center", '<div align="center">{param}</div>');
 	$parser->parse($message_bb);
 	$message = $parser->getAsHtml();

	if(isset($id_post) && isset($message) && isset($id_utilisateur)){
		$reponse=$bdd->prepare('INSERT INTO message(id_post,id_utilisateur,message) VALUES (?,?,?)') ;
		$reponse->execute(array($id_post,$id_utilisateur,$message));
		echo '<p class="test">Votre Post :<br> '.$message. ' <br> à été publié.</p>';
		header("Refresh:2; url=index.php?p=voirpost&id=" .$id_post );
	}
	else{
		header('Locate:index.php');
	}
?>