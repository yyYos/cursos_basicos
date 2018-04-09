<?php

class Parentesis{

	private $miPropiedad = "ahora";
	public function __construct(){

	}
	//dentro de los parentesis enviaremos un parametro
	//el parametro sirve para dinamisar el programa
	//El parametro va ser escrito dentro de los parentesis y va se llamado fuera de la clase
	//El valor del parametro sera enviado por alguien o mismo resultado de otro operacion
	public function cambiarValor($paramNuevo){
		//$this->miPropiedad="nuevo";
		$this->miPropiedad=$paramNuevo;
	}
	public function mostrarValor(){
		//echo $this->miPropiedad;
		echo $this->miPropiedad;
	}

}
$miObjeto = New Parentesis();
$miObjeto->cambiarValor("Futuro ");
$miObjeto->mostrarValor();
//para mandar otro parametro adjunto con el anterior
$miObjeto->cambiarValor(2);
$miObjeto->mostrarValor();
?>