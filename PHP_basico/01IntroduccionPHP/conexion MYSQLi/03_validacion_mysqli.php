<?php
//Conecxion a BD

$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "CursoPHP";

//los parametro enciados en el objeto mysqli los va recibir el contructor de la clase mysqli,  el cual va devolver un objeto
$objetoMysql = new mysqli($server,$usuario,$pass,$nombreBase);
echo "<pre>";
//var_dump($objetoMysql);
//Validar conexion a base de datos, si el objeto $objetoMysql tiene connect_error es verdadero
echo "<pre>";
if($objetoMysql->connect_error)
{
  echo "no se puede conectar al servidor";
}