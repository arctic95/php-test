<?php

	session_start();

	if(!file_exists("sess.txt"))
		header("Location: logowanie.php");

	session_decode(file_get_contents("sess.txt"));

	if(isset($_SESSION["is_auth"]) && $_SESSION["is_auth"] == 1){
		echo "Witaj ".$_SESSION["imie"]." ".$_SESSION["nazwisko"];
	} else {
		header("Location: logowanie.php");
	}

	

?>