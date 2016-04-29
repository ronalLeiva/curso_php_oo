<?php 
	/**
	 * Recordar que cada clase va en un archivo aparte, esto solo es con fines
	 * meramente didacticos clase padre para heredar a los demas
	 */

class Animal{

	public $sound_type = 'Aqui simplmente hago un sonido';

	public function run(){
		echo "Yo estoy corriendo \n";
	}

	public function walk(){
		echo "Yo estoy caminando \n";
	}

	public function getSound(){
		echo "Yo ". $this->sound_type;
	}

	Public function __construct(){
		echo "Ha nacido un animal \n";
	}
}



class Cat extends Animal{
	public $sound_type = "Maullo\n";
	// Como las clases hijas poseen un __construct entonces sobre escriben el
	// __construct del padre
	
	public function __construct(){
		echo "Ha nacido un gato \n";
	}
}


class Dog extends Animal{
	
	public $sound_type = "Ladro \n";

	// Hay veces que necesitamos agregar funcionalidad a nuestro constructor
	// que hemos heredado

	public function __construct(){

		// Con estas instrucciones mando a llamar al constructor del padre
		parent::__construct();

		// Estas lineas son las extras que quiero que aparezcan en mi __construct
		// de la clase hijo
		echo "Ha nacido un perro \n";
	}
}

$dog = new Dog();
$dog->run();
$dog->getSound();
echo "\n";
$cat = new Cat();
$cat->run();
$cat->getSound();

// Como puedo hacer para verificar si ha sido instanciada una clase padre
// En este caso con la herencia veremos que es una instancia de ambas clases

if( $dog instanceof Dog){
	echo "Es un perro \n";
}

if ( $dog instanceof Animal){
	echo "Es un animal \n";
}