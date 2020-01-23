<?php

	
	if(empty($_POST)){
		session_start();
		if(file_exists("sess.txt")){
			session_decode(file_get_contents("sess.txt"));
			if($_SESSION["is_auth"] == 1){
				header("Location: dashboard.php");
			} else {
				header("Location: logowanie.html");
			}
		} else {
			header("Location: logowanie.html");
		}
	}

	$lista_plikow = scandir("data");

	var_dump($lista_plikow);
	var_dump($_POST);

	if(in_array($_POST["email"], $lista_plikow)){
		$haslo_hashowane = unserialize(file_get_contents("data/".$_POST["email"]))[3];
		echo $haslo_hashowane;
		if(password_verify($_POST["password"], $haslo_hashowane)){
			$plik = unserialize(file_get_contents("data/".$_POST["email"]));
			session_start();
			$_SESSION["imie"] = $plik[0];
			$_SESSION["nazwisko"] = $plik[1];
			$_SESSION["is_auth"] = 1;
			file_put_contents("sess.txt", session_encode());
			header("Location: dashboard.php");
		}
	} else {
		echo "Haslo lub email sie nie zgadza";
	}

?>