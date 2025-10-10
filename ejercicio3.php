<?php

//Ej1
$num1=3;//Primera variable
$num2=9;//Segunda variable
$suma=$num1+$num2;//Sumamos las variables
$resta=$num1-$num2;//Las restamos
$multiplicacion=$num1*$num2;//Las multiplicamos
$division=$num1/$num2;//Las dividimos
$modulo=$num1%$num2;//Hacemos el resto
//Mostramos los resultados por pantalla
echo $suma;
echo $resta;
echo $multiplicacion;
echo $division;
echo $modulo;
echo "<br></br>";//Salto de línea

//Ej2
if ($num1<$num2){
    echo "El numero " .$num1, " es menor que el numero " .$num2;//Muestra el texto si el num1 es menor que el num2
}else if($num1>$num2){
    echo "El numero " .$num1, " es mayor que el numero " .$num2;//Muestra el texto si el num1 es mayor que el num2
}else{
    echo "El numero " .$num1, " es igual que el numero " .$num2;//Muestra el texto si el num1 es igual que el num2
}
echo "<br></br>";

//Ej3
//Si el resto de $num1 entre 2 es = 0, el resultado será "El resultado es par", si no, se mostrará "El resultado es impar"
$resultadoTernario=($num1%2==0)?"El resultado es par":"El resultado es impar";
echo $resultadoTernario;
echo "<br></br>";

//Ej4
if ($num1>10&&$num2>10){
    echo "Ambos números son mayores que 10";//Muestra el texto si ambos num son mayores que 10
}else if($num1>10||$num2>10){
    echo "Hay un número mayor que 10";//Muestra el texto si un num es mayor que 10
}else{
    echo "Ningún número es mayor que 10";//Muestra el texto si ningún num es mayor que 10
}
echo "<br></br>";

//Ej5
$x=5;
echo "</br></br>";
echo ++$x;//Imprime 6 (pre-incremento)
echo "</br></br>";
echo $x;//Imprime 6 de nuevo
echo "</br></br>";
echo $x++;//Imprime 6 y aumenta el valor en 1
echo "</br></br>";
echo $x;//Imprime el nuevo valor 7
echo "</br></br>";

?>