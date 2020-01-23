<?php

funtion find_text($text, $tree){

	//sprawdz zawartosc aktualnego elementu
	if($text == (string)$tree){
		return true;
	}

	//sprawdz wszystkie jego dzieci
	foreach($tree as $node){

		//tutaj wystepuje wywolanie rekurencyjne 
		if(find_text($text, $node)){
			return true;
		}
	}

	//nic nie znaleziono
	return false;

}

?>