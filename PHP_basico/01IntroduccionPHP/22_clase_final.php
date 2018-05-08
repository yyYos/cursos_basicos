<?php
//Clase final es decir que no se debe instanciar, nadie la puede heredar, dara error
final class MiClase{
  public function metodo()
  {}
}
//Esta clase hereda los metodos de MiClase pero dara error por ser una clase final, la cual es una regla
class OtraClase extends MiClase{
  
}