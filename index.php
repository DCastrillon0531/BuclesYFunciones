<?php

include('funciones.php');

echo("Clase 4: Bucles, Arreglos y Funciones");
echo("<br>..................................................................................");

//Arreglo (Array) Indexado en php 
$arreglo=array("Juan","María","James","Sandra");
echo("<br>");
print_r($arreglo);
echo("<br>..................................................................................");

//Arreglo (Array) Asociativo en php
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"María",'usuario3'=>"James",'usuario4'=>"Sandra");
echo("<br>");
print_r($arreglo);
echo("<br>..................................................................................");

//Tamaño de Arreglo (Array)
$tamano=count($arreglo);
echo("<br>");
echo("El tamaño de nuestro arreglo es: ".$tamano);
echo("<br>..................................................................................");

//Bucle For
for($centinela=0; $centinela<=10; $centinela++){
    echo("<br>El valor de centinela es:".$centinela."<br>");
}

//Bucle For - Para recorrer arreglos (Array´s)
echo("<br>..................................................................................");
$arreglo=array("Juan","María","James","Sandra");
for($centinela=0; $centinela<count($arreglo); $centinela++){
    echo("<br>".$arreglo[$centinela]."<br>");
}

//Bucle Foreach - Para recorrer arreglos (Array´s)
echo("<br>..................................................................................");
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"María",'usuario3'=>"James",'usuario4'=>"Sandra");
foreach($arreglo as $clave=>$valor){
    echo"<br>"."La Clave es: ".$clave."<br>";
    echo"<br>".($valor)."<br>";
}

//Bucle Foreach - Para Arreglo (Array) Indexado
echo("<br>..................................................................................");
$arreglo=array("Juan","María","James","Sandra");
foreach($arreglo as $clave=>$valor){
    echo "<br> La Clave del cajon es: ".$clave;
    echo "<br> El valor del cajon es: ".$valor."<br>";
}

//Arreglo MultiDimensional (Arreglo de arreglos)
echo("<br>..................................................................................");
$usuarios=array(
    'usuario1'=>array('nombre'=>"Juan",'edad'=>30,'genero'=>"Masculino"),
    'usuario2'=>array('nombre'=>"Maria",'edad'=>25,'genero'=>"Femenino"),
    'usuario3'=>array('nombre'=>"James",'edad'=>28,'genero'=>"Masculino"),
    'usuario4'=>array('nombre'=>"Sandra",'edad'=>32,'genero'=>"Femenino")
);
echo("<br>");
print_r($usuarios);

//Ciclo foreach para acceder a los elementos del arreglo multidimensional
echo("<br>..................................................................................");
foreach($usuarios as $clavesArreglosUnidimensionales=>$arreglosUnidimensionales){
    echo("<br>");
    echo($clavesArreglosUnidimensionales);
    echo("<br>");
    print_r($arreglosUnidimensionales);
    echo("<br>");
    foreach($arreglosUnidimensionales as $claves=>$valores){
        echo($claves).": ".$valores;
        echo("<br>");
    }
}

//Calcular la edad de dos personas
echo("<br>..................................................................................<br>");
calcularEdad(1995);
echo("<br>");
calcularEdad2(1995,1996);
echo("<br>");
calcularEdad2(1995,2020);
echo("<br>");
$edad3=calcularEdad3(1990,2020);
echo("<br>");
echo("La edad de la persona es: ".$edad3);

//Arreglo que se llena con una funcion
echo("<br>..................................................................................<br>");
$edades=array('edad1'=>calcularEdad3(1990,2020),'edad2'=>calcularEdad3(1991,2020));
print_r($edades);


?>