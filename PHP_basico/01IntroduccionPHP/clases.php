<?php 

#La clase son reglas
#El nombre empieza con mayuscula y las demas se inician con mayuscula (camelCase)
class MiClase
	{
		#La sig linea es una propiedad
		#pertenecen a las clases
		#es publica; cualquier metodo puede ocuparla
		#la forma que diferencia la variable de la propiedad es la forma de llamada
		public $miPropiedad = "YY";
		#La scope(alcance) de la sig propiedad es privada (solo se puede ocupar en esta clase)
		private $propiedadPriv = "Privada";
		#La sig linea es un metodo (accion que corresponde a un objeto o a un clase)
		#El nombre del metodo es una un nombre reservado
		#__contruct es un metodo magico
		#__contruct es el primer metodo que se ejecuta
		public function __construct()
			{
				$nombre = "Yos";
				//echo "Hola POO $nombre ";
				#asi se llama una propiedad
				#el this sig. que en esta clase existe un propiedad que quiero ocupar llama miPropiedad
				//echo $this->miPropiedad;
			}
		#Creamos un metodo donde cambiara el valor de la propiedad privada
		#Esto para poder llamarlo fuera de la clase
		public function cambiarValor(){
			#Se cambia el valor de la proedad privada
			$this->propiedadPriv="Nuevo nombre";
		}
		#Se puede crear un metodo para mostrar los valos de las variables o propiedades
		public function mostrarValor(){
			echo $this->propiedadPriv;

		}
	}
#En la sig linea manda a llamar a la clase para poder mosrar el metodo
#Creacion de objeto
#en la sig linea se ejecuta el contructor
$miObjeto = New MiClase();

#se puede mandar a llamar la prieddad privada desde el metodo creado "mostrarValor"
#Se manda a llamar el metodo no la propiedad
$miObjeto->cambiarValor();
#para poder ver el resultado de mostrarValor se tiene que llamas cambiarValor
$miObjeto->mostrarValor();
?>