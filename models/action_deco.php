<?php
	session_start();
	session_unset();
	session_destroy();
	header('Locate:index.php')
?>