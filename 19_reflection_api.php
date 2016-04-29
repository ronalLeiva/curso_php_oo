<?php
/**
 * El API Reflection es una implementación de la clase Reflection para 
 * analizar clases, si es cierto que con var_dump podemos ver el contenido de
 * datos, el API Reflection es su homologo para clases
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

$reflect_class = new ReflectionClass('Dog');
ReflectionClass::export($reflect_class);

// Podemos obtener el nombre de la clase
echo $reflect_class->getName();