<?php
/**
 * La carga automatica de clases es una funcionalidad que viene desde hace
 * tiempo en PHP a objetos.
 * Puedo definir reglas para la carga automática de archivos.
 *
 * Asi se hacia de la vieja forma, se tenia que hacer por cada archivo
 * 
 * require_once('config.php');
 * echo Config::ENVIRONMENT . "\n";
 * Para no hacer la carga archivo por archivo como antes, se creo la carga
 * automática de clases, esta función la debo hacer en un archivo aparte y será
 * el único que debemos cargar con el require_once 
*/
require_once('class/autoload_example.php');

echo config::ENVIRONMENT . "\n";