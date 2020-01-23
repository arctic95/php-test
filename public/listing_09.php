<?php 

	$x = $_GET["liczba"];

	if (is_numeric($x) && isset($x)){
		if($x < 10){
			echo "Liczba jest mniejsza od 10";
		} elseif ($x > 10) {
			echo "Liczba jest wieksza od 10";
		} else {
			echo "Liczba jest równa 10";
		}
	} else {
		echo "Liczba nie jest liczbą lub nie jest ustawiona";
	}

?>