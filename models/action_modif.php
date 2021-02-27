<?php

$message_bb = htmlspecialchars($_POST['message']);
	require_once 'jbbcode/Parser.php';
	$parser = new JBBCode\Parser();
	$parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
    $parser->addBBCode("quote", '<blockquote>{param}</blockquote>');
    $parser->addBBCode("center", '<div align="center">{param}</div>');
 	$parser->parse($message_bb);
 	$message = $parser->getAsHtml();
$reponse = $bdd->prepare('update message set message = ? where id = ?');
$reponse->execute(array($message ,$_GET['id']));
echo $_GET['id'];
echo '<p class="test">  message modifié.</p>';

header("Refresh:2;  url=index.php?p=accueil");
?>