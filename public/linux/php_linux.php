<?php
	$plik = file("plik_csv.csv", true);
	$tablica_10_procent = array();
	foreach ($plik as $produkt) {
		$tablica_produktu = explode(",", $produkt);
		$nazwa = $tablica_produktu[0];
		$cena = (float)$tablica_produktu[2]+((float)$tablica_produktu[2]*(float)$tablica_produktu[3]/100) + ((float)$tablica_produktu[2]/10);
		echo "<p>".$nazwa." ".$cena."</p>";

		array_push($tablica_10_procent, implode(",", [$tablica_produktu[0], $tablica_produktu[1], $tablica_produktu[2]+($tablica_produktu[2]/10),$tablica_produktu[3]]));
	}

	if(file_exists("plik_csv_10.csv")){
		echo "Dokonano nadpisania pliku <br/>";
	}

	file_put_contents("plik_csv_10.csv", implode("<br/>", $tablica_10_procent));

	echo file_get_contents("plik_csv_10.csv");
?>