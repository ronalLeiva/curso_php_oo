<?php
	/**
	 * [Carga las clases automáticamente]
	 * @param  [string] $class [Nombre de la clase como parámetro]
	 */
	
	/* Esta forma para versiones anteriores a PHP 5.3
	 
	function app_autoloader($class){

		include_once 'class/' . $class . '.php';

	}
	spl_autoload_register('app_autoloader');
	*/

	// Esta versión funciona para las versioens de PHP más recientes
	spl_autoload_register(function($class){

		include_once 'class/' . $class . '.php';

	});