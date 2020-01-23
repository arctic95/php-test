<?php

	session_start();

	$_SESSION["a"] = "ananas";
	$_SESSION["b"] = "banan";
	$_SESSION["c"] = "cytryna";

	file_put_contents("sess.txt", session_encode()) ;

?>