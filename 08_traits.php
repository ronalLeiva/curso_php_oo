<?php
	/**
	 * Bajo la filosofía de repetir la menor cantidad de código posible, 
	 * podemos compartir código entre clases no relacionadas con los llamados 
	 * traits. Aunque es importante recordar que en PHP no se puede hacer multi
	 * herencia directamente.
	 */
	
trait myUtilities{

	function sayMyName(){
		echo "mi nombre es: " . $this->name . "\n";
	}

}
abstract class Animal{

	abstract public function makeSound();
	public function run(){
		echo "Corriendo \n";
	}

}

class Dog extends Animal{
	
	private $name = "Perro";
	
	// Con esto ya tenemos acceso al trait myUlitities y acceso al método
	// syMyName que hará uso del atributo $name declarado aqui, localmente.
	use myUtilities;

	public function makeSound(){
		echo "Guau \n";
	}
}

class Cat extends Animal{

	private $name = "Gato";

	// Con esto ya tenemos acceso al trait MyUtilities y acceso al método
	// syMyName que hará uso del atributo $name declarado aqui, localmente.
	use myUtilities;

	public function makeSound(){
		echo "Miau \n";
	}

}

interface iDB{
	public function connect();
	public function desconnect();
}

class MySQL implements iDB{
	public function connect(){
		echo "Conenctado con MySQL....\n";
	}
	public function desconnect(){
		echo "Desconectadon de MySQL...\n";
	}
}
class Oracle implements iDB{
	public function connect(){
		echo "Conenctado con Oracle....\n";
	}
	public function desconnect(){
		echo "Desconectadon de Oracle...\n";
	}
}

$insDog = new Dog;
$insDog->sayMyName();
echo "\n";
$insCat = new Cat;
$insCat->sayMyName();
