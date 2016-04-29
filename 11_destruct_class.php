<?php
	/**
	 *  En ocasiones necesitamos dejar de utilizar un objeto. 
	 *  Pero al destruirlo quizás necesitemos realizar alguna acción, como 
	 *  liberar recursos o tomar una acción en específico y lo podemos 
	 *  especificar con un metodo destructor, el cual se ejecuta al momento de
	 *  ya no encontrar una referencia adicional a dicha instancia.
	 *
	 *  Ocurre al final del script pero también cuando llamamos a la función
	 *  exit(); o cuando destruimos explicitamente una instancia.
	 *  
	 */
	class undestructuble{
		public function __construct(){
			print "Clase creada \n";
			$this->name = "Indestructible";
		}

		public function __destruct(){
			print "Destruyendo a " . $this->name. "\n";
		}

	}

	$insUndestruct = new undestructuble;

	// Aunque esto se realice despues ejecuta el destruct luego de terminar 
	// de contar, que es cuando termina de funcionar este script
	
	for ($i=0; $i < 50; $i++) { 
		echo "{$i} \n";

		// Puedo invocar el __destruct cuando uso la función exit
		// en este ejemplo para cuando es 30
		
		if ($i == 30){
			exit();
		}
	}

	// Puedo destruir explicitamente la referencia a esta clase usando unset
	// si paso esta función antes del ciclo for, entonces va a invocar al 
	// __destruct antes de correr el ciclo.
	unset($insUndestruct);


	