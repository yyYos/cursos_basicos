//FUNCION AUTOINVOCADA
//Sirve para protejer el codigo de otras funciones que quieras ocupar ese mismo codigo
//las funciones no podrean entrar pero las funciones que esten drentro de este si podran ocupar
//lo que se encuentren fuera de esa funcion autinvocada
//Su estructura es la siguiente

(function(){
  //Todo codigo a ejecutar
  var variableGlobal = "Esto es una variable global";
  console.log(variableGlobal);
}())
