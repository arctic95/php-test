<?php 

	$liczba = $_GET["liczba"];

	if(!isset($liczba) || !is_numeric($liczba) || $liczba>100 ) {
		echo "Umrzyj";
		die();
	}
	

	echo "FOR <br/>";
	for($i=0; $i<$liczba; $i++){
		echo $i."<br/>";
	}


	echo "<br/>DO <br/>";
	$i = 0;
	do{
		echo $i."<br/>";
		$i++;
	}while($i<$liczba);


	echo "<br/>WHILE <br/>";
	$i = 0;
	while($i<$liczba){
		echo $i."<br/>";
		$i++;
	}

?>