<?php

	try {
		if($_POST["haslo"]!==$_POST["haslo-powtorz"]){
			// echo "Oba wprowadzone hasła muszą być identyczne";
			throw new Exception("Wprowadzone hasla nie sa identyczne", 1);
			
			die();
		}
	} catch(Exception $e) {
		echo 'Wystąpił wyjątek nr '.$e->getCode().', jego komunikat to:'.$e->getMessage();
		die();
	}
	

	if(!file_exists("data"))
		mkdir("data");

	$serializedData = serialize(array($_POST["imie"], $_POST["nazwisko"], $_POST["email"], password_hash($_POST["haslo"], PASSWORD_DEFAULT)));

	$istnieje = null;
	if(file_exists('data/'.$_POST["email"]))
		$istnieje = true;

	file_put_contents('data/'.$_POST["email"], $serializedData);

	if($istnieje){
		echo "Zakutalizowane dane uzytkownika o mailu: ".$_POST["email"];
	} else {
		echo "Dodano dane uzytkownika o mailu: ".$_POST["email"];
	}
?>