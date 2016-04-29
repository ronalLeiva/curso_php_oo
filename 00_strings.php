<?php 
/**
 * Podemos trabajar los string con comillas simples '', comillas dobles "" o
 * con here document (heredoc)
 */

/**
 * INTERPOLACION DE VARIABLES, se refiere al método para sustituir el nombre 
 * de la variable con su contenido, la forma más sencilla es con ""
 */
	$alguien = 'David';
	$donde	 = 'Aqui';
	echo "$donde estuvo $alguien \n";

/**
 * Si deseo diferenciar el nombre de la variable del texto que la rodea
 * si no pongo las {} php intentará morar el valor de la variable $nda y esa
 * no existe
 */

	$n = '2';
	echo "Esta es la {$n}da opción que presentamos \n" ;

/**
 * Con las comillas simples '' no se permite interpolar las variables.
 * las ventajas de las comillas dobles "" es que podemos tener secuencias de
 * escape como estas:
 * 		\"" Comillas dobles
 *   	\n  Linea nueva
 *   	\r  Retorno de carro
 *   	\t  Tabulación
 *   	\\  Diagonal
 *   	\$  Signo de dolas
 *   	\{  Llave izquierda
 *   	\}  Llave derecha
 *   	\[  Corchete izquierdo
 *   	\]  Corchete derecho
 *   	\0 hasta \777  Carácter ASCII representado en valor octal
 *   	\x0 hasta \xFF Carácter ASCII representado en valor hexadecimal
 */

/**
 * HERE DOCUMENT, Con heredoc se puede agregar fácilmente cadenas multilinea
 */
	
$texto = <<< FIN
\n
Habia una vez
En un lejano castillo
Un herrero que no tenia martillo. 
\n
FIN;

echo $texto;
