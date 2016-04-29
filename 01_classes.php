<?php 
class pet{
	public $name = "Firulais \n";
}


class Person{

	// Propiedades o atributos
	
	public $age;
	public $name;

	// Acción o método
	
	public function run(){
		echo "Estoy corriendo \n";
	}

	// Puede estar o no definido
	// Acción o método que se dispara sola al crear el objeto
	// recibe 2 argumentos $name y $age
	
	public function __construct($name){
		$this->name = $name;
	}

	// Metodo para saludar a otra persona enviando como parametro un objeto
	// persona =)

	public function greet( person $other_person ){
		echo "Hola, ". $other_person->name ."\n";
	}

	// Metodo para adoptar una pet
	
	public function adopt( pet $instance_pet ){
		echo 'Hey, adopté a '.$instance_pet->name;
	}

}

$person1 = new Person('Juan Pablo');
$person2 = new Person('Mario');
$pet 	 = new pet();

echo 	$person1->greet($person2);
		$person1->run();
		$person1->adopt($pet);