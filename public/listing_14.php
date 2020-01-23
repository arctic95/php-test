<?php 

	if(!isset($_GET["search"])){
		echo "Brak parametru search";
		die();
	}

	$search = $_GET["search"];

	$zdanie = "Dlugie zdanie z du iloscia znakow";
	$zdanie = "aabbbaaa";

	//echo "Piersze wystapienie ".strpos($zdanie, $search);

	$przesuniecie = 0;
	$pozycja = 1;
	$flag = 1;
	$wszystkie_wystapienia = [];

	echo $zdanie."</br>";

	while($flag === 1){

		$wystapienie = strpos($zdanie, $search);
		if($wystapienie !== FALSE){
			$przesuniecie = $przesuniecie + $wystapienie;
			$pozycja = $pozycja + $wystapienie + 1;

			$zdanie = substr($zdanie, $przesuniecie + 1);

			array_push($wszystkie_wystapienia, $pozycja-1);
		} else {
			$flag = 0;
		}

	}

	echo "Rozmiar tabeli ".sizeof($wszystkie_wystapienia)."</br>";

	print_r($wszystkie_wystapienia);

?>