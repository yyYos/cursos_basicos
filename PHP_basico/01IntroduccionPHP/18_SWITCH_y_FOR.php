<?php
//Contar en numero de elemtos de un arreglo (count)
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
    $contarElementos = count($paramResu);
    //echo "cantidad de elementos en el arreglo ".$contarElementos;
    $resultado=0;
    //estructura de decision
    switch($operacion)
    {
        case "suma";
         for($a = 0; $a < $contarElementos; $a++)
         {
           echo "$resultado + $paramResu[$a]  El valor de resultado = $resultado El valor del parametro = $paramResu[$a] La posicion del arreglo es $a <br/>";
           $resultado += $paramResu[$a];
         }
        break;
        case "resta";
          for ($a = 0; $a < $contarElementos; $a++)
          {
            echo "$resultado - $paramResu[$a]  El valor de resultado = $resultado El valor del parametro = $paramResu[$a] La posicion del arreglo es $a <br/>";
            $resultado -= $paramResu[$a];
          }
        break;
        case "multiplica";
          //El valor del resultado es el valor que se encuentra en en el arreglo
            $resultado = $paramResu[0];
          for($a = 0; $a < $contarElementos; $a++)
          {
            echo "$resultado * $paramResu[$a]  El valor de resultado = $resultado El valor del parametro = $paramResu[$a] La posicion del arreglo es $a <br/>";
            $resultado *= $paramResu[$a];
          }
        break;
        case "divide";
          $resultado = $paramResu[0];
          for($a = 0; $a < $contarElementos; $a++)
          {
            echo "$resultado / $paramResu[$a]  El valor de resultado = $resultado El valor del parametro = $paramResu[$a] La posicion del arreglo es $a <br/>";
            $resultado /= $paramResu[$a];
          }
        break;       
    }
    //regrese el resultado
      return $resultado;
  }
}
//variable que guarda un arreglo, el cual sirve para entrada de parametro para el metodo
$datos = array(1,2,3,4,5);
$objetoOperaciones = New OperacionesAritmeticas();
echo "El resultado es ".$objetoOperaciones->operaciones($datos,"divide");

