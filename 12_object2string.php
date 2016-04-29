<?php
	/**
	 *  En ocasiones necesitamos una representación textual de un objeto.
	 *  esta es la oportunidad de agregar usabilidad, en este caso la clase
	 *  sabrá como comportarse cuando se intente usar como cadena usando una
	 *  función mágica llama _toostring con la cual podemos obligar que la 
	 *  clase se comporte de manera diferente cuando se intente usar como cadena
	 *  
	 *  
	 */
	class person{

		private $name;
		private $last_name;

		public function __construct($name, $last_name){

			$this->name = $name;
			$this->last_name = $last_name;

		}

		// Aqui ocurre la magia, con la funcionalidad como cadena
		public function __toString(){
			return $this->name ." " . $this->last_name . "\n";
		}

	}

$insPerson = new Person('Ronal','Leiva');
echo $insPerson;