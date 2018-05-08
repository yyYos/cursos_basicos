<?php

#El alcace de las variables son 2 importantes
#Locales: son accesibles solo dentro de la funsion donde se ejecutaran.
#Globales: Son accesibles en cualquier lugar del codigo.

#variable local
$nombre = 'variable global fuera de funcion';

function saberNombre(){
	#variable local, al igual que JS no se puede mandar a llamar esta variable fuera de esta funcion
	$nombreDos = 'variable local dentro de funcion<br>';
	echo $nombreDos;
}
saberNombre();

#Muestra un error por mandar a llamar la variable dentro de la funcion saberNombre()
// echo $nombreDos;
echo $nombre;

?>