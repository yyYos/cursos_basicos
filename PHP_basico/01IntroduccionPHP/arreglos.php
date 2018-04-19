<?php
//----------------------Metodos aritmeticos
//La propiedad es funcional solo en la clase
//la Variable es un elementos que es funcional en el metodo

class OperacionesAritmeticas
{
  //Creacion de arreglos
  public function arreglo()
    {
        //Las posiciones empiezan desde 0,1,2 susesivamente
        $arreglo = array("Valor 1","Valor 2","Valor 3","Valor 4");
        //echo $arreglo [4];
        //Definimos la posicion del valor, con numeros
        $arreglo2 = array(1=>"Valor 1",2=>"Valor 2",0=>"valoe 3");
        //echo $arreglo2[0];
        //Convertir las variables en arreglos, sin necesidad de poner la palabra necesaria
        //La continuacion de los arreglos no es necesario tenerlo sucesivamente, pero es recomendable secesivamente
        $arreglo3[1]="Valor uno";
        $arreglo3[3]="Valor 2";
        //echo $arreglo3[1];
//-----Posicionamiento asociativo en arreglos: en vez de nombrar con numeros, se asocia con nombres
    //en vez de buscarla con numero, se busca con el nombre
        $arreglo4 = array("uno1"=>"Yoselin","dos2"=>"Arzola","tres3"=>"Jimenez");
        echo "Posicion asociativa ".$arreglo4["uno1"]."<br/>";
    }
  //ingresamos parametros (se llaman igual que las variables)
  public function suma($daroResu)
    {
      $resultado = $daroResu[0] + $daroResu[3];
    //regrese el resultado
      return $resultado;
    }
  public function resta($paramResu)
    {
      $resultado = $paramResu[3] - $paramResu[1];
      return $resultado;
    }
  public function multiplica($paramResu)
    {
      $resultado = $paramResu[2] * $paramResu[0];
      return $resultado;
    }
  public function divide($paramResu)
    {
      $resultado = $paramResu[3] / $paramResu[1];
      return $resultado;
     }
}
//variable que guarda un arreglo, el cual sirve para entrada de parametro para el metodo
$datos = array(1,2,3,4);
$objetoOperaciones = New OperacionesAritmeticas();
echo "Resultado de suma con arreglo es ".$objetoOperaciones->suma($datos)."<br/>";
$objetoOperaciones->arreglo();
echo "La resta con arreglos es: ".$objetoOperaciones->resta($datos)."<br/>";
echo "La multiplicacion con arreglos es: ".$objetoOperaciones->multiplica($datos)."<br/>";
echo "La division con arreglos es: ".$objetoOperaciones->divide($datos);
