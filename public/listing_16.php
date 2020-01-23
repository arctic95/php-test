<?php 

	if(!isset($_GET["p"])){
		echo "Brak parametru";
		die();
	}

	$tablica = [];

	$p = $_GET["p"];

	for ($i=0; $i < $p; $i++) { 
		array_push($tablica, "item {$i}");
	}

	print_r($tablica);
	echo "<br/>";

	array_push($tablica, "dodatek");
	print_r($tablica);
	echo "<br/>";

	array_pop($tablica);
	print_r($tablica);
	echo "<br/>";

	array_shift($tablica);
	print_r($tablica);
	echo "<br/>";

	array_unshift($tablica, "poczatek");
	print_r($tablica);
	echo "<br/>";

	echo "Rozmiar ".sizeof($tablica);
	echo "<br/>";

	if(in_array("poczatek", $tablica)){
		echo "znaelziono <br/>";
	} else {
		echo "nie znaelziono :( <br/>";
	}

?>