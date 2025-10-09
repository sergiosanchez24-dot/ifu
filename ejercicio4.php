<?php
//Ej1
$num1=3;
if ($num1<0){
    echo "El numero " .$num1, " es menor que 0";
}else if($num1>0){
    echo "El numero " .$num1, " es mayor que el 0";
}else{
    echo "El numero es 0";
}
echo "<br></br>";

//Ej2
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
echo "<br></br>";

//Ej3
$x=0;
$y=0;
while ($x<=100){
    $y=$y+$x;
    $x++;
}
echo $y;
echo "<br></br>";

//Ej4
$dia = 3;
switch($dia){
    case 1:
        echo "Hoy es lunes";
        break;
    case 2:
        echo "Hoy es martes";
        break;
    case 3:
        echo "Hoy es miércoles";
        break;
    case 4:
        echo "Hoy es jueves";
        break;
    case 5:
        echo "Hoy es viernes";
        break;
    case 6:
        echo "Hoy es sábado";
        break;
    case 7:
        echo "Hoy es domingo";
        break;
    default:
        echo "Día no válido";
}
echo "<br></br>";

//Ej5.
$nombres=["Pedro","Juan","Luis"];

foreach($nombres as $nombre){
    echo $nombre;
}


?>