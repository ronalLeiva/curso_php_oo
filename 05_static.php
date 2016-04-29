<?php 
	/**
	 * Métodos y propiedades estáticas en PHP
	 * pueden ser accedidos sin necesidad de crear una instancia
	 * pueden ser llamados desde cualquier lugar
	 */

class DBStatic{
	protected static $db_user = "rleiva \n";
	protected static $db_password = "12345()#$%& \n";
	protected static $db_database_name = "nombreBD \n";

	public static function connect(){
		echo "Conectando con: " . self::$db_user . ":" . self::$db_password;
	}

}

class BaseProfile extends DBStatic{

	public function __construct(){
		self::connect();
	}

}

class MyProfile extends BaseProfile{
	
	public $name;
	public $last_name;

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function message(){
		echo "Hola este es el mensaje \n";
	}

/*	public function __construct(){
		// $this->connect2DB();
		// Puedo llamar desde la clase nieta metodos de la clase abuela
		// self::connect();
		
	}*/

}



// Para que esto funciones debo cambiar el acceso de DBStatic de protected a public
// Puedo llamar los atributos static desde afuera de la clase
// No hay necesidad de crear una instancia, practiamente se leen desde cualquier
// lado, de la siguiente forma.
/*
echo DBStatic::$db_user;
echo DBStatic::$db_password;
echo "\n";
echo DBStatic::connect();*/

$inst = new MyProfile;

// Esto no se debe de hacer aunque PHP lo deje, actualmente por funcionalidad
// de códigos en versiones anteriores y por cierta funcionalidad interna
// si se tiene habilitado los errores en PHP nos mandará mensajes de warning 

MyProfile::message();

// En proximas versiones esto ya no se podrá hacer por lo que NO SE RECOMIENDA