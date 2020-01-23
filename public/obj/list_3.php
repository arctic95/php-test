<?php

	abstract class FileOperation{

		public $nazwa_pliku;
		public $data;

		function update(){
			$serializedData = serialize($this->data);
			file_put_contents($this->nazwa_pliku, $serializedData);
		}

		function load(){
			$serializedData = file_get_contents($this->nazwa_pliku);
			$this->data = unserialize($serializedData);
		}

	}

	class User extends FileOperation {

		private $fileData;
		public $name;
		private $email;

		function __construct($nazwa_pliku){
			$this->nazwa_pliku = $nazwa_pliku;
		}

		function getNazwa(){
			return $this->nazwa_pliku;
		}

		function setNazwa($nazwa){
			$this->nazwa_pliku = $nazwa;
		}

		function getFileData(){
			return $this->fileData;
		}

		function getName(){
			return $this->name;
		}

		function setName($name){
			$this->name = $name;
		}

		function getEmail(){
			return $this->email;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function update(){
			$serializedData = serialize(array("imie"=>$this->getName(), "email"=>$this->getEmail()));
			file_put_contents($this->nazwa_pliku, $serializedData);
		}

		function load(){
			$serializedData = file_get_contents($this->nazwa_pliku);
			$this->fileData = unserialize($serializedData);
		}

	}

	$x = new User("serial.txt");

	$x->name = "Stefann";
	$x->setEmail("stf@o2.pl");

	$x->update();
	$x->load();

	var_dump($x->getFileData());

?>