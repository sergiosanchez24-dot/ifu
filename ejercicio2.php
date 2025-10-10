<?php
//Ej1
$nombre="Antonio de Triana";//Cadena de texto
$edad="25";//Número entero
$salario="4000000.12";//Número flotante
$jugadorBetis=true;//Booleano
var_dump($nombre, $edad, $salario, $jugadorBetis);

//Ej2
echo "<br></br>";//Salto de línea
$persona=["nombre"=>"Antonio", "edad"=>"25", "ciudad"=>"Sevilla"];//Array asociativo
var_dump($persona);

//Ej3
echo "<br></br>";
define("NOMBRE_CURSO", "Programación PHP");//Definición de una constante con valor "Programación"
echo NOMBRE_CURSO;//Muestra de la constante por pantalla

//Ej4
echo "<br></br>";
function sumaNumeros($numeros){//Función para sumar números
    $suma=0;//Valor de la suma = 0
    //Recorre el array $numeros con el bucle foreach
    foreach ($numeros as $num){//La variable $num tomará un elemento del array
        $suma += $num;//sumamos el valor $num a la variable $suma
    }
    return $suma;//Devolvemos el valor final
}

$numeros=[1, 2, 3, 4];//Creamos un array indexado
$resultado=sumaNumeros($numeros);//Sumamos los numeros que se encuentran en el array
echo "El resultado es: " .$resultado;//Mostramos la suma final

//Ej5
echo "<br></br>";
$dinero=null;//La variable dinero no tiene ningun valor
if(is_null($dinero)){
    echo "La variable es nula";//Muestra este texto si la variable no tiene valor
}else{
    echo "La variable no es nula";//Muestra este texto si la variable tiene algún valor
}
?>