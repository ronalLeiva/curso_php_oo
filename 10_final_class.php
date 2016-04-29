<?php
	/**
	 * En ocasiones, no deseamos que una funcionalidad sea heredada, 
	 * por lo que queremos limitar la herencia para dicha clase.
	 *
	 * Esto se hace con el fin de evitar herencias ridículas del tipo de los
	 * tatarabuelos, bisabuelo, abuelo, etc.
	 *
	 * La flexibidad que le podemos dar a nuestro código viene de una buena 
	 * abstracción, no de la herencia.
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

	// Esta clase ya no es heredable, por que ya le colocamos que es la final
	// esta será la última clase que se va a instanciar.
final class Schnauzer extends Dog{
	public function __construct(){
		$this->breed = "Shnauzer";
	}
}

class anotherDog extends Schnauzer{

}

$insSh = new Schnauzer;
echo "\n";

