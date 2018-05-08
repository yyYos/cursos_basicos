<?php
//Conecxion a BD

$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "CursoPHP";

//La sig. forma es procedural, con funcion de mysql, es como un resultado de una variable
$conexion = mysqli_connect($server,$usuario,$pass,$nombreBase);

//explicando la sig liena, quiere decir que la variable conexion, es un booleano, la condicion, va a convertir ese boleano a un valor contrario
//si es true = false si es false = true
//conexion por defecto tiene true, la sig lo convertira en false
if(!$conexion)
  {
   echo "la conexion fallo";
  //Cierra sistema
   exit();
  }
else
  {
    echo "Conexion exitosa <br>".mysqli_get_host_info($conexion);
  }
echo "Continuar sistema";