<?php
    $dsn='mysql:host=localhost;dbname=forum';
    $user='root';
    $pass='root' ;
    try {
            $bdd = new PDO($dsn,$user,$pass);
    }
    catch(PDOException $e)
    {
            die('erreur : '.$e->getMessage());
    }
?>