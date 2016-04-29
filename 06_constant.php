<?php
	/**
	* Una clase también puede ser un contenedor de constantes. Así, podríamos 
	* inclusive tener una clase de solamente constantes relacionadas.
	* Las constantes son una herramienta muy util para hacer el codigo + legible
	* y tambien para guardar información que no va a cambiar a lo largo de las
	* aplicaciones.
	*/

class Config{
	// Por norma las constantes se escriben en mayúsculas
	const DB_USER_NAME = "rleiva";
	const DB_USER_PASSWORD = "12345678";
	const DB_DATABASE_NAME = "mydb\n";
	const DOMAIN_NAME = "asteksfot.com\n";
	const ENVIROMENT = "produccion";
}


class BaseProfile extends Config{

	protected $connection_data = 'Conexion BD';

	public function __construct(){
		echo "conectando con: " . self::DB_DATABASE_NAME;
		
	}

}

class MyProfile extends BaseProfile{


	public function __construct(){
		// Las constantes se mandan a llamar siempre con SELF ya que son contantes
		// de clase, jamas se usa $this->contante; $this hace referencia al objeto
		// SELF hace referencia a la clase.
		BaseProfile::__construct();
		echo "El dominio es:" . self::DOMAIN_NAME;
	}

}

// Podemo llamar a la constante con un SELF desde afuera de la clase
// echo MyProfile::DOMAIN_NAME ."\n";
$inst = new MyProfile;
