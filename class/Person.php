<?php 
/**
 * Clase para realizar pruebas con PHPUnit
 */
class Person{
	private $name;
	private $last_name;
	private $phone;
	private $mobile;

	public function __construct($name, $last_name, $phone, $mobile){
		$this->name = $name;
		$this->last_name = $last_name;
		$this->phone = $phone; 
		$this->mobile = $mobile;

	}

	public function __toString(){
		return $this->name ." " . $this->last_name . ", " . $this->phone . " o ". $this->mobile . "\n";
	}

	public function __call($name, $arguments){

			// Primero diremos que este metodo no existe en el caso de que no
			// entre en nuestro criterio 
			$no_method	= true;

			// El metodo va a obtener una subcadena del nombre que se le esta
			// pasando los 3 primeros caracteres, osea el prefijo de nuestro 
			// metodo en este caso para capturar el get
			$method_name = substr($name,0,3);

			if ($method_name == 'get'){
				
				// como si exite el metodo mandamos un false
				$no_method = false;
				
				// el nombre verdadero es lo que viene despues de get osea que
				// será otra sub cadena
				$real_name = substr(strtolower($name),3);

				// regreso el valor de $real_name
				return $this->$real_name;

			}

			// si la variable $no_method se mantiene en verdadero entonces
			// vamos a mandar una exception
			
			if ( $no_method ){
				throw new Exception("Metodo {$name} No encontrado");
			}

		}
}