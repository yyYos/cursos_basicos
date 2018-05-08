<?php

//herncia: parent
class ElPadre
{
 public function metodoDelPadre()
  {
    echo "Desde el padre"; 
  }
}
class ElHijo extends ElPadre
{
  public function metrodoDelHijo()
    {
      echo "desde el Hijo";
    }
  public function otroMetodo()
    {
    //forma de llamar al metodo de herencia
      parent::metodoDelPadre();
    }
}
$objetoHijo = New ElHijo();
$objetoHijo->otroMetodo();
