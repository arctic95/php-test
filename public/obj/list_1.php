<?php

	class Person {
		public $name;
		public $surname;

		public function setFullName($name, $surname){
			$this->name = $name;
			$this->surname = $surname;
		}

		public function getFullName(){
			return $this->name." ".$this->surname;
		}
	}

	$x = New Person();

	$x->setFullName("Artur", "Kolodziej");

	echo $x->getFullName();

?>