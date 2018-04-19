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
    $resultado = '';
    //estructura de decision
    switch($operacion)
    {
        case "suma";
        $resultado = $paramResu[0] + $paramResu[1];
        break;
        case "resta";
        $resultado = $paramResu[0] - $paramResu[1];
        break;
        case "multiplica";
        $resultado = $paramResu[1] * $paramResu[0];
        break;
        case "divide";
        $resultado = $paramResu[0] / $paramResu[1];
        break;       
    }
    //regrese el resultado
      return $resultado;
  }
}
//variable que guarda un arreglo, el cual sirve para entrada de parametro para el metodo
$datos = array(10,4,19,1);
$objetoOperaciones = New OperacionesAritmeticas();
echo "El resultado es ".$objetoOperaciones->operaciones($datos,"resta");

