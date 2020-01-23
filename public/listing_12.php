<?php 

	$parametr = null;
	if(isset($_GET["p"])){
		$parametr = $_GET["p"];
	} else {
		echo "Umrzyj";
		die();
	}

	switch ($parametr) {
		case 's1':
			echo "Wybrano parametr s1";
			break;

		case 's2':
			echo "Wybrano parametr s2";
			break;

		case 's3':
			echo "Wybrano parametr s3";
			break;

		default:
			echo "Wybrano nieznany parametr";
			break;
	}

?>