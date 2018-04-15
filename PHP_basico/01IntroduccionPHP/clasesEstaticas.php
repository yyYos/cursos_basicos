<?php
//---------------------Metodos estaticos
class OtraClase
{
  //metodo statico, significa que no necesita crearse un objeto ($objeto = New OtraClase)
  public static function metodoSinObjeto()
    {
      echo "Metodo sin objeto";
    }
}
//No se crea el objeto para poder llamar el metodo
OtraClase::metodoSinObjeto();