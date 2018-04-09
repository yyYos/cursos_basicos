<?php

class MiClase
{
  private $miPropiedad = "ahora";
  private $precio=0;
  public $nombre="Yy";
  public $cosa;
  public function __construct()
    {
      //echo "hola que hace";
    }
  public function cambiarValor($nuevoNombre, $numero, $nuevaCosa)
    {
      //cambiar el valor de la propiedad $miPropiedad siendo privada
      $this->miPropiedad = $nuevoNombre;
      $this->precio=$numero;
      $this->cosa=$nuevaCosa;
    }
  //Mostrar Valor de las propedades
  public function mostrarValor()
    {
      echo $this->miPropiedad;
      echo $this->precio;
      echo $this->nombre;
      echo $this->cosa;
    }
}
//creacion del objetos
$miObjeto = new MiClase;
//se ejecuta el metodo cambiarValor
$miObjeto->cambiarValor("futuro",200,"danger");
$miObjeto->mostrarValor();