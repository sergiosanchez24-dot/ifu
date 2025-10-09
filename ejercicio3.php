<?php

//Ej1
$num1=3;
$num2=9;
$suma=$num1+$num2;
$resta=$num1-$num2;
$multiplicacion=$num1*$num2;
$division=$num1/$num2;
$modulo=$num1%$num2;
echo $suma;
echo $resta;
echo $multiplicacion;
echo $division;
echo $modulo;
echo "<br></br>";

//Ej2
if ($num1<$num2){
    echo "El numero " .$num1, " es menor que el numero " .$num2;
}else if($num1>$num2){
    echo "El numero " .$num1, " es mayor que el numero " .$num2;
}else{
    echo "El numero " .$num1, " es igual que el numero " .$num2;
}
echo "<br></br>";

//Ej3
$resultadoTernario=($num1%2==0)?"El resultado es par":"El resultado es impar";
echo $resultadoTernario;
echo "<br></br>";

//Ej4
if ($num1>10&&$num2>10){
    echo "Ambos números son mayores que 10";
}else if($num1>10||$num2>10){
    echo "Hay un número mayor que 10";
}else{
    echo "Ningún número es mayor que 10";
}
echo "<br></br>";

//Ej5
$x=5;
echo "</br></br>";
echo ++$x;
echo "</br></br>";
echo $x;
echo "</br></br>";
echo $x++;
echo "</br></br>";
echo $x;
echo "</br></br>";

?>