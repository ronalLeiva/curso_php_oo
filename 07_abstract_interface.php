<?php
	/**
	 *  Las clases ABSTRACTAS son un tipo especial de clase que no puede ser
	 *  instanciada, pero que define estructura y puede definir funcionalidad.
	 *  
	 *  Cada metodo definido como abstracto deberá estar definido en la clase
	 *  que lo implementa.
	 *  
	 *  Ademas una clase que tiene almenos 1 metodo abstracto debe considerarse
	 *  y declararse como abstracta.
	 *
	 *  Las INTERFACES son similares a las clases abstractas, con la diferencia que 
	 *  en las interfaces no se puede definir absolutamente nada de funcionalidad
	 *
	 *  Prácticamente la finalidad es la de indicar que metodos o atributos debe
	 *  implementar por fueza la clase que la va a heredar.
	 */

abstract class Animal{

	abstract public function makeSound();
	public function run(){
		echo "Corriendo \n";
	}

}

class Dog extends Animal{

	public function makeSound(){
		echo "Guau \n";
	}
}

class Cat extends Animal{

	public function makeSound(){
		echo "Miau \n";
	}

}

interface iDB{
	public function connect();
	public function desconnect();
}

class MySQL implements iDB{
	public function connect(){
		echo "Conenctado con MySQL....\n";
	}
	public function desconnect(){
		echo "Desconectadon de MySQL...\n";
	}
}
class Oracle implements iDB{
	public function connect(){
		echo "Conenctado con Oracle....\n";
	}
	public function desconnect(){
		echo "Desconectadon de Oracle...\n";
	}
}

$insDog = new Dog;
$insDog->makeSound();
$insDog->run();
echo "\n";
$insCat = new Cat;
$insCat->makeSound();
$insCat->run();
echo "\n";
$instMS = new MySQL;
$instMS->connect();
$instOR = new Oracle;
$instOR->desconnect();