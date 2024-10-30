<?php


$nome = "moisés \n";

echo $nome;

$nota1 = 6;
$nota2=5;
$nota3= 10;

$mediaNotas = ($nota1+$nota2+$nota3)/3;

echo "A média das notas: " .$mediaNotas . "\n";

$metros = 1;
$calculoCentimetros = $metros*100;

echo "Quantidade em centimetros: " . $calculoCentimetros . "\n";

$ano = 2024;

$bissexto = date('L', mktime(0,0,0,1,1, $ano));

echo $ano . ' '. ($bissexto? 'é' : 'não é') . ' um ano bissexto' ."\n";

$temperaturaCelsius = 16;

$transformaFahrenheit = ($temperaturaCelsius * 9/5) + 32;

echo "O clima tá $temperaturaCelsius C, esse clima em Fahrenheit é $transformaFahrenheit";