<?php

//clase
class SerVivo
  {
    public function respirar()
      {
        echo "Metodo para respirar"; 
        //Para poder llamar a un metodo privado, se tiene que mandar a llamar desde la clase donde pertenezca en un metodo publico
        $this->metodoPrivado("hola");
      }
  //El tipo de metodo protegido, es el que solo puede interactuar con todos los metodos que se encuentran dentro de la clase
    private function metodoPrivado($ola)
      {
        echo "Metodo Privado $ola "; 
      }
    protected function metodoCompartido()
      {
        echo "Metodo Protegido ";
      }
    public function caminar()
      {
        echo "Metodo para caminar ";
      }
    public function oir()
      {
        echo "Metodo para oir ";
      }
    public function mirar()
      {
        echo "Metodo para mirar ";
      }
    public function comer()
      {
        echo "Metodo para comer ";
      }
    public function sentir()
      {
        echo "Metodo para sentir ";  
      }
  }
//Las clases pueden extender "extends" de otra clase, esto significa que hereda los metodos que esten en la clase extendida
class SerHumano extends SerVivo
  {
    public function razonar()
      {
        echo " Metodo para razonar ";
        //Con esto se muestra el metodo privado, ya que se llama desde la misma clase dentro del metodo donde se mando a llamar
        //$this->respirar();
        //El metodo protecgido si puede ser llamado desde otra clase extendida(heredada)
        $this->metodoCompartido();
      }
  }
//creamos objetos para poder llamar cada metodo
$objetoSerVivo = new SerVivo;
//$objetoSerVivo->respirar();
//No se puede llamar a un metodo privado desde aqui, solo desde la misma clase
//$objetoSerVivo->metodoPrivado();
$objetoSerHumano = new SerHumano;
echo "<br/>";
$objetoSerHumano->razonar();