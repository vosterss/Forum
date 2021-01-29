<?php
session_start();
require('../models/connect_bdd.php'); 
require('../models/action_listpost.php');


foreach ($results as $result) {
    echo $result['username'].' - '.$result['titre'].' - '.$result['contenu'];
    if($_SESSION!==''){
        echo '<a style="padding-left:15px;" href="delete.php?id='.$result['id'].'">delete</a><br>';
    }
}
?>