<?php
//----------------------Metodos aritmeticos
//La propiedad es funcional solo en la clase
//la Variable es un elementos que es funcional en el metodo

class OperacionesAritmeticas
{
  public function estructura()
   {
     $valorUno = "MX";
     $valorDos = "BOL";
     //Esta linea es igual a un if else, es una validacion practica
     //si la validacion es correcta, toma el valor que se encuentra entre ? y : si la validacion es diferente toma el valor entre : y ;
     $resultado = ($valorUno == "MX") ? "Igual" : "diferente";
     return $resultado;
   }
  //mediante los parametros se ara la operacion pedida
  public function operaciones($paramResu,$operacion="suma")
  {
    //estructura de decision
    if($operacion=="suma")
    {
      $resultado = $paramResu[0] + $paramResu[1];
    }
    else if($operacion=="resta")
    {
      $resultado = $paramResu[0] - $paramResu[1];
    }
    else if($operacion=="multiplica")
    {
      $resultado = $paramResu[1] * $paramResu[0];
    }
    else if($operacion=="divide")
    {
      $resultado = $paramResu[0] / $paramResu[1];
    }
    else
    {
      $resultado= "La operaccion '$operacion' no es reconocida";
    }
    //regrese el resultado
      return $resultado;
  }
}
//variable que guarda un arreglo, el cual sirve para entrada de parametro para el metodo
$datos = array(10,4,19,1);
$objetoOperaciones = New OperacionesAritmeticas();
echo "El resultado es resta ". $objetoOperaciones->operaciones($datos,"x");
echo "La variable es ".$objetoOperaciones->estructura();

