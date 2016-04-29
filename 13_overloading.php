<?php
	/**
	 * La sobrecarga u overloading de métodos en PHP se realiza de una manera 
	 * muy especial. Mientras que en otros lenguajes de programación podemos 
	 * definir métodos que se llaman iguales pero que reciben argumentos de 
	 * diferentes tipos y de diferente número, en PHP la sobrecarga se refiere 
	 * a la capacidad de generar métodos y atributos dinámicos.
	 */

	class person{

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

		// Aqui ocurre la magia, con la funcionalidad como cadena
		public function __toString(){
			return $this->name ." " . $this->last_name . ", " . $this->phone . " o " .$this->mobile. "\n";
		}

		/*
		 * Reemplazo esto para hacer la magía de manera dinámica
		 * con la función especial __call
		 
		public function getName(){
			return $this->name . "\n";
		}
		
		Esta función recibe 2 argumentos, el nombre de la misma función y
		los argumentos que recibe.

		Esto lo que hace es, que cuando recibe la intención de mandar a llamar
		una función que no existe, manda a llamar esta función y aqui nosotros
		podemos darle nuestra funcionalidad.

		*/
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
				return $this->$real_name . "\n";

			}

			// si la variable $no_method se mantiene en verdadero entonces
			// vamos a mandar una exception
			
			if ( $no_method ){
				throw new Exception("Metodo {$name} No encontrado");
			}

		}

	}

$insPerson = new Person('Ronal','Leiva','555 5555','444 4444' );
echo $insPerson;

/**
 * Si solo quiero imprimir el nombre, tendría que crear un metodo por cada uno
 * de los atributos y si son muchos es mas trabajo, por eso crearemos una 
 * funcion que trabaje por nosotros.
 *
 * Hare el metodo para que funcione de manera dinámica con __call
 */ 

echo $insPerson->getName();
echo $insPerson->getLast_name();
echo $insPerson->getPhone();
echo $insPerson->getMobile();
echo $insPerson->getPopo();