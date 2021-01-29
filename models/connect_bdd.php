<?php
    $dsn='mysql:host=localhost;dbname=forum';
    $user='root';
    $pass='root';
    try{
        $bdd = new PDO($dsn,$user,$pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die('erreur : '.$e->getMessage());
    }
?>