<?php
//----------------------Metodos aritmeticos
//La propiedad es funcional solo en la clase
//la Variable es un elementos que es funcional en el metodo

class OperacionesAritmeticas
{
  //ingresamos parametros (se llaman igual que las variables)
  public function suma($valorUno,$valorDos,$valorTres,$valorCuatro,$valorCinco)
    {
      $resultado = $valorUno + $valorDos + $valorTres + $valorCuatro + $valorCinco;
    //regrese el resultado
      return $resultado;
    }
  public function resta($valorUno,$valorDos,$valorTres,$valorCuatro,$valorCinco)
    {
      $resultado = $valorUno - $valorDos - $valorTres - $valorCuatro - $valorCinco;
      return $resultado;
    }
  public function multiplica($valorUno,$valorDos,$valorTres,$valorCuatro,$valorCinco)
    {
      $resultado = $valorUno * $valorDos * $valorTres * $valorCuatro * $valorCinco;
      return $resultado;
    }
  public function divide($valorUno,$valorDos,$valorTres,$valorCuatro,$valorCinco)
    {
      $resultado = $valorUno / $valorDos / $valorTres / ($valorCuatro / $valorCuatro);
      return $resultado;
     }
}
//
$objetoOperaciones = New OperacionesAritmeticas();
echo "El resultado es: ".$objetoOperaciones->suma(3,3,3,3,3)."<br/>";
echo "La reta es: ".$objetoOperaciones->resta(15,1,1,1,1)."<br/>";
echo "La multiplicacion es: ".$objetoOperaciones->multiplica(2,2,2,2,2)."<br/>";
echo "La divicion es: ".$objetoOperaciones->divide(4,4,4,4,4);


