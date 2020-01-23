<?php 

	$a = null; $b = null; $dzialanie = null;
	if(isset($_GET["a"])){
		$a = $_GET["a"];
	} else {
		echo "Nie podano parametru a wiec uzwana jest domyslna wartosc 4 <br/>";
		$a = 4;
	}

	if(isset($_GET["b"])){
		$b = $_GET["b"];
	} else {
		echo "Nie podano parametru b wiec uzwana jest domyslna wartosc 2 <br/>";
		$b = 2;
	}

	if(isset($_GET["dzialanie"])){
		$dzialanie = $_GET["dzialanie"];
	} else {
		echo "Nie podano parametru dzialanie wiec uzwana jest domyslna wartosc add <br/>";
		$dzialanie = "add";	
	}

	function add(float $l1, float $l2) : float {
		return $l1 + $l2;
	}

	function sub(float $l1, float $l2) : float {
		return $l1 - $l2;
	}

	function mul(float $l1, float $l2) : float {
		return $l1 * $l2;
	}

	function div(float $l1, float $l2) : float {
		if($l2==0){
			echo "Nie mozna dzielic przez ";
			return 0;
		} else {
			return $l1/$l2;
		}
		
	}

	switch ($dzialanie) {
		case 'add':
			echo add($a, $b);
			break;
		
		case 'sub':
			echo sub($a, $b);
			break;

		case 'mul':
			echo mul($a, $b);
			break;

		case 'div':
			echo div($a, $b);
			break;			

		default:
			echo "default";
			break;
	}

?>