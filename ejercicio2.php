<?php
//Ej1
$nombre="Antonio de Triana";//Cadena de texto
$edad="25";//Número entero
$salario="4000000.12";//Número flotante
$jugadorBetis=true;//Booleano
var_dump($nombre, $edad, $salario, $jugadorBetis);

//Ej2
echo "<br></br>";
$persona=["nombre"=>"Antonio", "edad"=>"25", "ciudad"=>"Sevilla"];//Array asociativo
var_dump($persona);

//Ej3
echo "<br></br>";
define("NOMBRE_CURSO", "Programación PHP");
echo NOMBRE_CURSO;

//Ej4
echo "<br></br>";
function sumaNumeros($numeros){
    $suma=0;
    foreach ($numeros as $num){
        $suma += $num;
    }
    return $suma;
}

$numeros=[1, 2, 3, 4];
$resultado=sumaNumeros($numeros);
echo "El resultado es: " .$resultado;

//Ej5
echo "<br></br>";
$dinero=null;
if(is_null($dinero)){
    echo "La variable es nula";
}else{
    echo "La variable no es nula";
}
?>