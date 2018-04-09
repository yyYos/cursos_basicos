<?php

#Hacen referencia a operaciones que se realizan entre variable y/o constantes
#Operadores aritmeticas
$x=10;
$y=5;

$resUno = $x + $y;
$resDos = $x - $y;
$resTres = $x * $y;
$resCuatro = $x / $y;
$resCinco = $x % $y;
$resSeis = -$x;
echo "punto para contatenar ".$resUno."<br>";

#Operadores de asignacion
$a = 5;
$b = 5;
$c = "letra a ";
$d = "letra b";

#Si se descomentan la operaciones anteriores, tomara el ultimo valor de a o b
// $a = $b;
// $resA = $a += $b;// resA = a + b
// $resB = $a -= $b;// resB = a - b
// $resC = $a *= $b; // resC = a * b
// $resD = $a /= $b; // resD = a / b
// $resE = $a %= $b; // resE = a % b
$resF = $c .= $d; // Concatena dos strings

echo "Operadores de asignacion ".$resF."<br>";

#Incremento y decremento
$f = 1;
$g = 2;

$incre = $f++;
$decre = --$g;
echo "Incremento var++ ".$incre."<br>Decremento --var ".$decre."<br>";

#operadores comparativos
$h = 10;
$j = "10";
$i = 20;


#Si es falso aparece vacio
# es verdadero aparece 1
$resG = $h == $j; //Esta comparacion no le importa si el numero esta en un tipo de dato string o numerico
$resH = $h === $i; //Cuando es este tipo de comparacion los dos valores deben ser del mismo tipo de dato
$resI = $h != $i; //Si es diferente de
$resJ = $h !== $j; //h es diferente de j, numerico y string con el mismo numero

echo "True = 1 False = vacio <br>";
echo "El resultado es $resJ<br>";

#Operadores logicos
$k = 1;
$l = 2;

// $resl = $k==1 xor $l==2;//Operaodr or permite que las dos operaciones sean true
$resk = $k==1 xor $l==3;//Operador xor no permite si las dos operaciones son true al mismo tiempo
echo "Resultado del operador xor ".$resk;

?>