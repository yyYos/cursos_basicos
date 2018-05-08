<?php
/*Crar una propiedad privada
*crear 5 objetos
*cambiar el valor de la propiedad, desde un parametro - valor que se encuentra dentro de los parentesis del metodo
*/
//se crea otra clase para la creaacion del html
class VistaHtml
{
  //Se le agrega al parametro un valor, el cual tendra si no se le ingresa un parametro desde la llamada del metodo
 public function headHtml($titulo="Godins")
 {
   echo "<!DOCTYPE html><html><head>";
   echo "<title>$titulo</title>";
   echo "<head/>";
 } 
 public function bodyIni()
 {
    echo "<body>";
 }
 public function bodyFin()
 {
    echo "<body/>";
 }
 public function footerHtml()
 {
   echo "<html/>";
 }
}
class MiClase
{
  private $miPropiedad = "";
  public function __construct()
    {
      //echo "hola que hace";
    }
  public function cambiarValor($nuevoNombre)
    {
      //cambiar el valor de la propiedad $miPropiedad siendo privada
      $this->miPropiedad = $nuevoNombre;
    }
  //Mostrar Valor de las propedades
  public function mostrarValor()
    {
      echo $this->miPropiedad;
    }
}
//creacion del objetos
$objHtml = new VistaHtml;
$miObjeto = new MiClase;

$objHtml->headHtml("HTML y PHP");
$objHtml->bodyIni();
//se ejecuta el metodo cambiarValor
$miObjeto->cambiarValor("futuro");
$miObjeto->mostrarValor();

$objHtml->bodyFin();
$objHtml->footerHtml();