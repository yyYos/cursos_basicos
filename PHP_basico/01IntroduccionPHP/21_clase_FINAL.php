<?php
//clase final

final class miClase
{
    
}

//dara error por que la clase "miClase" es privada al anteponer la palabra reservada final, esto quiere decir que no podra ser heredado nada de los metodos que se encuentran dentro de esta
class clase extends miClase
{
    
}