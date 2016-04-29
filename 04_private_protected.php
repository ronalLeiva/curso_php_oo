<?php
	/**
 	 * En ocaciones debemos proteger la identidad de nuestra clase y con ello
 	 * también la jerarquia.
 	 */

class BaseProfile{
	/*
	private $connection_data = "Conexion BD \n";
	private function connect2DB(){
		echo $this->connection_data;
	}*/

	// Cuando paso de private a protected puedo acceder a los metodos desde
	// las clases hijas, de manera privada desde las que lo heredan y no puede
	// ser invocado directamente o desde otra clase que no sea una instancia.

	protected $connection_data = "Conexion BD \n";
	
	protected function connect2DB(){
		echo $this->connection_data;
	}

	public function __construct(){
		$this->connect2DB();
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

	public function __construct(){
		$this->connect2DB();
	}

}

$instBase = new MyProfile();
