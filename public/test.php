<?php

	$test = 'Losowy string';
	$testLen = strlen($test);

	echo $test." ".$testLen."<br/>";


	echo "<br/><br/>";

	///tablice
	$data = [];
	array_push($data, 'test1');
	echo "push ".print_r($data)."<br/>";
	$lastItem = array_pop($data);
	echo "pop ".print_r($data)."<br/>"; echo $lastItem."<br/>";
	array_unshift($data, 'test1');
	echo "unshift ".print_r($data)."<br/>";
	array_shift($data);
	echo "shift ".print_r($data)."<br/>";


	echo "<br/><br/>";



?>