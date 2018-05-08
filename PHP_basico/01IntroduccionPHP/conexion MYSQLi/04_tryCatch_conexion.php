<?php
//Conecxion a BD

$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "CursoPHP";

//ingresa a un metodo estatico de la clase PDO; acordarse que las clases estacticas no necesitan instanciar un objeto
//Muestra un listado de las BD que acepta
var_dump(PDO::getAvailableDrivers());

//Evalua de la sig sentencia dentro de try si tiene errores cachala la exepcion en la variable $e y has lo sig
try
{
  //para la conexion de PDO("primer parametro es el tipo de BD que se utiliza:host con el que se trabaja, en este caso $server;nombre de  la BD")
  $ojetoPDO = new PDO("mysql:host=$server;dbname=$nombreBase",$usuario,$pass);
}
catch(PDOException $e)
{
  echo "error".$e->getMessage();
  exit();//Cerrar la conexion
}
echo "Sin errores, el sistemas sigue";