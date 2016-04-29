<?php
/**
 * Una forma de ordenar código es agrupándolo de acuerdo a su funcionalidad o 
 * abstracción. 
 *
 * Con namespaces podemos agrupar clases relacionadas y con PHP7 incluso podemos
 * en la misma linea importar multiples namespaces
 */

require_once('class/MyClass.php');
// Con esto lograremos que nuestro código sea más legible que utilizar
// la sentencia en cada invocación $this->posts = new Mynamespace\MyClass;
// luego ya podemos invocar la clase normalmente.

/*
 * si voy a usar varias clases con el mismo nombre puedo hacer lo siguiente:
 * use Mynamespace\MyClass as MyClass1;
 * use directorio\Mynamespace\MyClass as MyClass2;
 * 
 * Luego para invocar en otra parte del código se podrá llamar asi:
 * 
 * $this->posts1 = new MyClass1\MyClass;
 * $this->posts2 = new MyClass1\MyClass;
 * 
 */

use Mynamespace\MyClass;

class Main{

	public $posts;

	public function __construct(){
		$this->posts = new MyClass;
	}

}

$app = new Main;
$app->posts->greet();