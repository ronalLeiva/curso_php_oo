<?php 
class MyProfile{

	/**
	 * Los atributos pueden ser publicos o privados
	 * Los atributos publicos pueden ser asignados desde cualquier parte donde
	 * se haya instanciado, mientras que si lo hacemos privado solo se podrá 
	 * acceder desde adentro o al crear un metodo publico que nos devolverá
	 * el atributo.
	 */

	private $email;
	public 	$name;
	public 	$last_name;

	// Asi como existen los atributos privados tambien podemos crear metodos
	// privados.
	
	private function getDetails(){

	}

	public function __construct(){

	}

	public function getEmail(){
		return $this->email."\n";
	}

	public function setEmail($email){
		$this->email = $email;
	}

}

$instMyProfile = new MyProfile;
$instMyProfile->setEmail("bernanrdo@correo.com");
echo $instMyProfile->getEmail();

