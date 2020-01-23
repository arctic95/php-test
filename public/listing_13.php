<?php

	if(!isset($_GET["p"])){
		echo "Nie ustawiony p";
		die();
	}

	$p = $_GET["p"];

	if($p==="s1"){
		echo "Ustawiony jest parametr s1";
	} elseif ($p==="s2") {
		echo "Ustawiony jest parametr s2";
	} elseif ($p==="s3") {
		echo "Ustawiony jest parametr s3";
	} else {
		echo "Ustawiony parametr nie jest rozpoznawany";
	}

?>