<?php

	define('DATE', 1);
	define('TIME', 2);
	define('DATE_TIME', 3);
	define('DAY_OF_WEEK', 4);

	define('HOUR', 1);
	define('DAY', 2);
	define('WEEK', 3);
	define('MONTH', 4);


	function timeFunc ($stala, int $time = null) : string{

		if(is_null($time)){
			$time = time();
		}

		switch ($stala) {
			case 1:
				return date("Y-m-d", $time); 
				break;

			case 2:
				return date("i:s", $time);
				break;

			case 3:
				return date("Y-m-d H:i:s", $time);
				break;

			case 4:
				return date("l", $time);
				break;
		}
	}

	function addTimeFunc ($stala) {
		switch ($stala) {
			case 1:
				return strtotime("+1 hour", strtotime(time())); 
				break;

			case 2:
				return strtotime("+1 day", strtotime(time())); 
				break;

			case 3:
				return strtotime("+1 week", strtotime(time())); 
				break;

			case 4:
				return strtotime("+1 month", strtotime(time())); 
				break;
		}
	}

	echo timeFunc(DATE); echo "<br/>";
	echo timeFunc(TIME); echo "<br/>";
	echo timeFunc(DATE_TIME); echo "<br/>";
	echo timeFunc(DAY_OF_WEEK); echo "<br/>";

	echo "<br/>";

	echo timeFunc(DATE, addTimeFunc(HOUR)); echo "<br/>";
	echo timeFunc(DATE, addTimeFunc(DAY)); echo "<br/>";
	echo timeFunc(DATE, addTimeFunc(WEEK)); echo "<br/>";
	echo timeFunc(DATE, addTimeFunc(MONTH)); echo "<br/>";
?>