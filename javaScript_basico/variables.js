//Variables globales: podemos acceder a ellas desde cualquier parte del codigo
//local al bloque: "var" accesible solo dentro del bloque en el que fue declarado
//local a la funcion : "let" accesible dentro de la funcion
//NO SE RECOMIENDA UTILIZAR VARIABLES GLOBALES
var a = 5; //local al bloque
let b = 10; //local a la funcion
x = 22; //global
const z //constantes

//Tipos de datos
typeof a; //typeof saber el tipo de dato

//Cadenas
var palabra = 'Soy una cadena';
var caracter = 'c' //el tipo de datos sera string
var comillas = "String con comillas" //Se utiliza mas apostrofes, por convencion en JS
var bolean = true;
typeof palabra;

//areglos = objetos en JS
arreglos = [
    1,
    2,
    3
];//si vemos cual es el tipo de dato nos muestra object

//creacion de objetos
objeto =[
    atr1: 'csdena',
    atr2: 5
];

//creacion de objeto
//si al atributo se le agregan apostrofe no hay problema
objetoUno =[
  'atr1' = 'cadena',
  'atr2' = 10
];
//Para saber el tipo de datos de un objeto(tambien asi se les llama a los arreglos)
//punto '.' para acceder al objeto
typeof objetoUno.atr1;

//si queremos comprar tipos de datos es con ===
a = 6;
b = '6';
//el valor es el mismo pero el tipo no
a === b; //Saldra false, ya que el tipo de dato de a es numerico y b es string
a == b; //Saldra TRUE, compara el valor NO el tipo de dato
a !== b;

//signo + para concatenar cadenas
'cadena' + 'cadena';