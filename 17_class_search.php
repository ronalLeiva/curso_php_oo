<?php
/**
 * En ciertos momentos necesitamos buscar dentro de nuestras clases. 
 * Determinar si una clase existe en determinado scoop, alcance o contexto
 * para ello contamos con una función especial que nos puede decir si existe
 * una clase.  Esto nos puede ayudar cuando estamos trabajando con clases
 * dinamicamente.
 * 
 * class_exists 
 * 
 * puede devolver 1 o 0 que significa verdadero o falso, existe
 * o no.
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

// Script de prueba podría ser:

$classes = ['Being','Animal','Plant','Cat','Flor','Dog','Luna'];
foreach ($classes as $class_) {
	echo $class_ . ( class_exists($class_) ? " Si \t" : " No\t") . "\n";
}