<?php
/**
 * Podemos determinar dentro de una clase los metodos que estan disponibles
 * para no andar revisando directamente en la clase por ejemplo ;)
 * 
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

$instancia = new Cat;
var_dump(get_class_methods($instancia));

// Para ver una clase abstracta solo colocamos el nombre entre comillas no se
// pueden instanciar las clases abstractas

var_dump(get_class_methods('Animal'));