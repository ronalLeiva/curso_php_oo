<?php 
// Investigar sobre PHPUnity para realizar pruebas unitarias.

/**
 * Test Driven Development
 *
 * Programación orientada a pruebas, en este paradigma se intenta hacer pruebas
 * primero, para luego hacer que nuestro código pase las pruebas, tiende a 
 * salva guardar la funcionalidad de nuestro código.
 *
 * COMO INSTALAR PHPUnit en UBUNTU
 * Download: 
 * 			wget https://phar.phpunit.de/phpunit.phar
 * Make executable:
 * 			chmod +x phpunit.phar
 * Move globally:
 * 			sudo mv phpunit.phar /usr/local/bin/phpunit
 * Test:
 * 			phpunit --version
 * 			
 * La instruccion para ponerlo a funcioanr desde ubuntu es: 
 * 			clear && phpunit 21_person_test.php 
 * 			
 * PHPUnit esta basado en comprobar aciertos o comprobar que lo que estamos
 * probando sea verdadero (true)
 *
 * Para hacer las pruebas de los metodos, debo anteponer el prefijo test
 * a cada uno de los que deseo probar.
 * 
 */


// esto deberia hacerse con el Autoload pero para este fin funciona
require_once('class/Person.php');

class PersonTest extends PHPUnit_framework_TestCase{

	public function testPersonConstruct(){
		$person = new Person('Ronal','Leiva','5555 5555','4444 4444');

		// Aqui pruebo que $person, sea una instancia de la clase Person y luego
		// el mensaje de error que voy a enviar
		/*$this->assertTrue($person instanceof Person, 
			'Debe ser una instancia de la clase Person'
		);*/

		// Aqui estoy probando que el metodo getName() me devuelva exactamente 
		// lo que yo estoy ingresando como nombre, puedo ir probando el resto
		// de metodos getLast_Name, etc...

		$this->assertEquals($person->getName(),'Ronal',"La respuesta debería ser Ronal \n");
		$this->assertEquals($person->getLast_Name(),'Leiva',"La respuesta debería ser Leiva \n");
		$this->assertEquals($person->getPhone(),'5555 5555',"La respuesta debería ser 5555 5555 \n");
		$this->assertEquals($person->getMobile(),'4444 4444',"La respuesta debería ser 4444 4444 \n");

	}
	// Tambien puedo obligar a que pruebe la lógica de nuestra aplicacion,
	// por ejemplo que espere una excepción debo poner obligatoriamente el 
	// comentario de abajo
		
	/**
	 * @expectedException Exception
	 */
	public function testThrowException(){
		$person = new Person('Ronal','Leiva','5555 5555','4444 4444');
		$this->assertEquals($person->geName(),'Ronal',"La respuesta debería ser Ronal \n");
	}

	// Esto tienen que pasar la prueba, el hecho de que se lanze la exception
	// y que la estemos esperando significa que todo esta bien :D

}
