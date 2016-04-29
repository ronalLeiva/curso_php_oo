<?php
/**
 * Programación orientada a pruebas, también es conocida como Test Driven
 * Develpment. En este paradigma se intenta hacer pruebas primero para hacer
 * luego que nuestro código pase las pruebas.  Es diferente pero muy interesante
 * ya que tiende a salva guardar la funcionalidad de nuestro código.
 *
 * Empiezo realizando pruebas, por obvias razone me irá dando problemas ya que
 * estaré solicitando cosas que aún no existen, entonces luego vengo y voy a ir
 * creando los metodos y atributos para ir limpiando mis pruebas de errores.
 * 
 */

require_once('class/autoload_example.php');

class PersonTest extends PHPUnit_Framework_TestCase{

	public function testPersonConstruct(){
		$person = new Person('Ronal','Leiva','5555 5555','4444 4444');

		// En esta prueba estoy chequeando que la variable $person sea una
		// instancia de la clase Person

		$this->assertTrue(
			$person instanceof Person, 
			"Debe ser una instancia de la clase Person \n"
		);

		// Prueba para que cuando pida el nombre nos devuelva un valor
		$this->assertTrue(
			$person->getName() == 'Ronal', 
			"Debe debolver Ronal"
		);
	}
	// También podemos añadir validaciones para aumentar funcionalidad a la 
	// clase.
	
	/**
	 * @expectedException Exception
	 */
	public function testEmptyName(){
		$person = new Person('Ronal','Leiva','5555 5555','4444 4444');
		$this->assertTrue(
			// a proposito puse mal geName para que salte la exception y pueda
			// probarse que funcione.
			
			$person->geName() == 'Ronal', 
			"Debe debolver Ronal"
		);
	}
	

}