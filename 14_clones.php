<?php
/**
 * En ocasiones el copiado de un objeto no es el comportamiento que buscamos,
 * por ejemplo si tuvieramos un objeto haciendo referencia a una ventana lo
 * logico seria que al copiar dicho objeto nos diera una nueva ventana, sin 
 * embargo dependiendo de como este implementada la ventana, pudiera ser que el
 * copiado simplemente nos devuelva la misma instancia es decir la misma ventana
 * ¿como podría crear una nueva ventana sin crear una nueva instancia? es aqui
 * donde el CLONADO DE OBJETOS entra al rescate.
 *
 * EJEMPLO DEL PATRON DE DISEÑO SINGLETON
 * Con esto buscamos que exista una y solo una instancia de nuestra clase.
 *
 * pero despues cuando clono, rompo este patrón
 */

class DB{

	private static $instance;
	public $name = '';

	public static function getInstance(){
		
		if (null === static::$instance){
			static::$instance = new static();
		}

		return static::$instance;

	}

	protected function __construct(){

	}

	public function getName(){
		return $this->name . "\n";
	}

}

// Al llamar a mi clase de la manera tradicional me dará error
// $mysql = new DB; por que el __construct es protected

// Forma correcta de crear la instancia
$mysql = DB::getInstance();
$oracle = DB::getInstance();
$mysql->name = "MySQL";
// Aunque yo hice 2 instancias $mysql y $oracke del objeto practicamente 
// se esta usando la misma esto es lo que busco con el 
// patrón de diseño Singleton.

echo $mysql->getName();
echo $oracle->getName();

// Pero si haco un clon y luego cambio el nombre se puede observar que $sqlServer
// es una nueva instancia e independiente.
$sqlServer = clone $mysql;
$sqlServer->name = "SqlServer";

echo $sqlServer->getName();