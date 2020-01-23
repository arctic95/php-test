<?php

	echo "<h2>Podane dane: </h2><br/>";
	echo "Imię: ".$_GET["imie"]."<br/>";
	echo "Nazwisko: ".$_GET["nazwisko"]."<br/>";
	echo "Plec: ";
		switch ($_GET["plec"]) {
		case 'm':
			echo "mężczyzna<br/>";
			break;

		case 'k':
			echo "kobieta<br/>";
			break;
		
		default:
			# code...
			break;
	}
	echo "Wiek: ".$_GET["wiek"]."<br/>";
	echo var_dump($_GET); echo "<br/>";
	echo var_dump($_POST); echo "<br/>";
	echo var_dump($_REQUEST); echo "<br/>";
?>