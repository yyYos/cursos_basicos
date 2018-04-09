//Variables globales: podemos acceder a ellas desde cualquier parte del codigo
//NO SE RECOMIENDA UTILIZAR VARIABLES GLOBALES
var variableGlobal = "Esto es una variable global";

console.log(variableGlobal);

function variables(){
  //Las variables locales se encuentran dentro de la funcion o funciones anidadas
  var variableLocal = "Esto es una variable local (VAR)";
  //diferencia entre var y let ?
  let variableLet = "Esto es una variable local (LET)";
  variableGlobal2 = "Sin la palabra reservada var se vuelve variale global";
  console.log(variableLocal,variableLet,variableGlobal);
}
variables();
//Las variables sin la palabra reservada var son automativamente globales, se pueden llamar desde cualquier parte del codigo
console.log(variableGlobal2);
//La siguiente linea no muestra nada ya que variableLocal funciona SOLO en la funcion
//console.log(variableLocal);