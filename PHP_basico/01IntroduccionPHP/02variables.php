<?php
#Programacion estructurada
#Esto es un numero
$numero = 10;
echo "Esto es una variable numerica: $numero";
echo "<br>";

#Esto es un string
$palabra = "Palabra";
echo "Esto es una variable de tipo String: $palabra";
echo "<br>";

#Eso es una variable de tipo booleana
#Si es falso el valor es vacio
#Si es verdadero (TRUE) el valor es 1
$boleana = TRUE;
echo "Esto es una variable de tipo Boleana: $boleana";
echo "<br>";

#Esto es una arreglo
$arreglo = array("rojo","amarillo");
echo "Esto es un arreglo: $arreglo[0]";
echo "<br>";

#arreglos con propiedades (especificar nombre a cada indice)
$arregloPropi = array("verdura"=>"lechuga","verduraDos"=>"tomate");
echo "Esto es un array con propiedades: $arregloPropi[verdura]";
echo "<br>";

#Variables de tipo objeto
$fruta = (object)["frutaUno"=>"uva","frutaDos"=>"manzana"];
echo "Esto es una variable tipo objeto: $fruta->frutaUno";
echo "<br>";

#Esto es una constante
define("PI",3.1416);
echo "Esto es una constante"+PI;
echo "<br>";

#Esto e unconstante con tres opciones
#La tercera opcion TRUE o FALSE, significa si es o no sencible a las mayusculas y minusculas
define("SAY_HELLO","Hola mundo",TRUE);
echo say_hello;
echo "<br>";

?>