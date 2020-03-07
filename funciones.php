<?php

//funcion para calcular la edad de una persona
function calcularEdad($nacimiento){
    $edad=(2020-$nacimiento);
    echo("<br>");
    echo("La edad de la persona es: ".$edad);
}

function calcularEdad2($nacimiento, $actual){
    $edad=$actual-$nacimiento;
    echo("<br>");
    echo("La edad de la persona es: ".$edad);
}

function calcularEdad3($nacimiento, $actual){
    $edad=$actual-$nacimiento;
    return ($edad);
}


?>