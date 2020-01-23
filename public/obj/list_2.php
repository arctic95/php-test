<?php

	class Obiekt{

		public $nazwa_pliku;
		public $data;

		function __construct($nazwa_pliku){
			$this->nazwa_pliku = $nazwa_pliku;
		}

		function update(){
			$serializedData = serialize($this->data);
			file_put_contents($this->nazwa_pliku, $serializedData);
		}

		function load(){
			$serializedData = file_get_contents($this->nazwa_pliku);
			$this->data = unserialize($serializedData);
		}

	}

	$obj = new Obiekt("serial.txt");

	//$obj->update();
	$obj->load();

	var_dump($obj->data);

?>