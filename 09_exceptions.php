<?php
	/**
	 *  Los errores en PHP siempre han sido un problema. Si bien ha mejorado, 
	 *  en la programación orientada a objetos podemos aprovechar las 
	 *  excepciones para detener la ejecución y adicionalmente actuar acorde 
	 *  a dicho error.
	 *  En otras palabras atrapamos los errores y hacemos su manejo más sencillo
	 *
	 * Recordar que en nuestro código debemos usar los errores del más específico
	 * al más genérico
	 */
/*	try {

		// Mensaje explicando el error
		throw new exception("No hay archivo de configuración \n");		

	} catch (Exception $e) {
		
		// Mensaje generico de error mostrando la explicación
		echo "Hubo un error \n" . $e->getMessage();

		// Cuando debo ejecutar un bloque de código luego que se capturo un error
	}finally{
		echo "Cerrar conexión de la base de datos \n";
	}
*/

class DBException extends Exception{

}

	// Bloque de código para tener errores específicos y genéricos
class Main{
	public function __construct(){

		try {
			
			// Estamos capturando un error especifico de una clase
			 throw new DBException("No hay conexion \n");
			// throw new Exception("No hay espacio en memoria \n");

		} catch (DBException $e) {
			echo "Error específico: " . $e->getMessage(); 

		} catch (Exception $e) {
			echo "Error genérico: " . $e->getMessage(); 
		}

	}
}

$main = new Main;