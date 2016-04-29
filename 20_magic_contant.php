<?php
	/**
	 * En ocasiones quisiéramos saber en qué clase o método estamos ubicados, 
	 * ya sea para depurar o para agregar funcionalidad a nuestra clase o 
	 * método. 
	 *
	 * Podemos determinar en que linea, clase, trait, etc. estamos ubicados.
	 */
			
trait myUtilities{

	function sayMyName(){
		if ( !( $this->name) ){

			logger::log(
				'Error. Debe tener nombre. Error en el archivo '
				. __FILE__
				. ', en la linea ' . __LINE__
				. ', en la clase ' . __CLASS__
				. ', en el metodo ' . __METHOD__
				. ', en el trait ' . __TRAIT__
			);
			throw new Exception ("No tiene nombre \n");
		}
		echo "mi nombre es: " . $this->name . "\n";
	}

}

// Clase para crear un log en un archivo de texto a mano
class Logger{
	public static function log($text){
		$prefix = date('d-m-Y- h:i:s ::: ');
		file_put_contents('log.txt', $prefix . $text . "\n", FILE_APPEND);
	}
}

abstract class Animal{

	abstract public function makeSound();
	public function run(){
		echo "Corriendo \n";
	}

}

class Dog extends Animal{

	// Con esto ya tenemos acceso al trait myUlitities y acceso al método
	// syMyName que hará uso del atributo $name declarado aqui, localmente.
	use myUtilities;
	//private $name = "Perro";

	public function makeSound(){
		echo "Guau \n";
	}
}

class Cat extends Animal{

	// Con esto ya tenemos acceso al trait MyUtilities y acceso al método
	// syMyName que hará uso del atributo $name declarado aqui, localmente.
	use myUtilities;
	//private $name = "Gato";

	public function makeSound(){
		echo "Miau \n";
	}

}

$insDog = new Dog;
$insCat = new Cat;

$insDog->sayMyName();
$insCat->sayMyName();
$insCat->run();
$insDog->makeSound();