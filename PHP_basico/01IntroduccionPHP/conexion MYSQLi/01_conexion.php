<?php
//Conecxion a BD

$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "CursoPHP";

//La sig. forma es procedural, con una funcion
//$conexion = mysqli_connection();

//La sig forma es orientada objeto
$conexion = new mysqli($server,$usuario,$pass,$nombreBase);
echo gettype($conexion)."<br>";
//con var_dump() se utiliza para identificar las propiedades del objeto, la estructura del la propiedad dada
echo var_dump($conexion);