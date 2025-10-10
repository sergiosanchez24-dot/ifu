<?php
//Ej1
$num1=3;
if ($num1<0){
    echo "El numero " .$num1, " es menor que 0";//Muestra el texto si num1 es menor que 0
}else if($num1>0){
    echo "El numero " .$num1, " es mayor que el 0";//Muestra el texto si num1 es mayor que 0
}else{
    echo "El numero es 0";//Muestra el texto si num1 es igual que 0
}
echo "<br></br>";//Salto de línea

//Ej2
for ($i = 0; $i < 10; $i++) {//Muestra el valor de la variable i, luego incrementa su valor en 1 y la vuelve a mostrar hasta llegar a 10
    echo $i;
}
echo "<br></br>";

//Ej3
$x=0;
$y=0;
while ($x<=100){//Mientras x no sobrepase 100 hará lo siguiente
    $y=$y+$x;//Suma ambas variables y actualiza la "y"
    $x++;//Incrementa x en 1
}
echo $y;//Muestra la suma final
echo "<br></br>";

//Ej4
$dia = 3;
switch($dia){
    case 1://Muestra el texto de abajo si el valor de la variable es 1
        echo "Hoy es lunes";
        break;
    case 2://Muestra el texto de abajo si el valor de la variable es 2
        echo "Hoy es martes";
        break;
    case 3://Muestra el texto de abajo si el valor de la variable es 3
        echo "Hoy es miércoles";
        break;
    case 4://Muestra el texto de abajo si el valor de la variable es 4
        echo "Hoy es jueves";
        break;
    case 5://Muestra el texto de abajo si el valor de la variable es 5
        echo "Hoy es viernes";
        break;
    case 6://Muestra el texto de abajo si el valor de la variable es 6
        echo "Hoy es sábado";
        break;
    case 7://Muestra el texto de abajo si el valor de la variable es 7
        echo "Hoy es domingo";
        break;
    default://Muestra el texto de abajo si el valor de la variable es distinta a las anteriores
        echo "Día no válido";
}
echo "<br></br>";

//Ej5.
$nombres=["Pedro","Juan","Luis"];//Creo un array indexado

foreach($nombres as $nombre){//cada valor del array será un $nombre
    echo $nombre;//Muestra todos los valores uno por uno
}


?>