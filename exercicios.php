<?php


$nome = "moisés \n";

echo $nome;

$nota1 = 6;
$nota2 = 5;
$nota3 = 10;

$mediaNotas = ($nota1 + $nota2 + $nota3) / 3;

echo "A média das notas: " . $mediaNotas . "\n";

$metros = 1;
$calculoCentimetros = $metros * 100;

echo "Quantidade em centimetros: " . $calculoCentimetros . "\n";

$ano = 2024;

$bissexto = date('L', mktime(0, 0, 0, 1, 1, $ano));

echo $ano . ' ' . ($bissexto ? 'é' : 'não é') . ' um ano bissexto' . "\n";

$temperaturaCelsius = 16;

$transformaFahrenheit = ($temperaturaCelsius * 9 / 5) + 32;



echo "O clima tá $temperaturaCelsius C, esse clima em Fahrenheit é $transformaFahrenheit \n";

for ($i = 0; $i < 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}

$altura = 1.89;
$peso = 90.5;

$imc = $peso / ($altura * $altura);

echo $imc . "\n";

$horario = 19;

if ($horario <= 12) {
    echo "Bom dia";
} else if ($horario > 12 && $horario <= 18) {
    echo "Boa tarde";
} else {
    echo "Boa noite" . "\n";
}

$notasParaOFilme = array(10, 8, 9, 7.5, 5, 6.8);
// or use []

//array associativo;
$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói"
];

var_dump($notasParaOFilme);

echo $filme['nome'];


$numeros = [1,2,2,3,4,4,5];

$numeros= array_unique($numeros);

var_dump($numeros);


$notas = [6, 5, 10, 3 ,4,5];


for ($i=0; $i <count($notas) ; $i++) { 
    if($notas[1] > 6) {
        echo "Alunos aprovados";
    }

    else {
        echo "Alunos reprovados";
    }

 
}

$contaBancaria = [
    "titular" => "Moisés",
    "saldo" => 500.00
];

echo $contaBancaria['titular'];
echo $contaBancaria ['saldo'];

$familiares = [
    "Gilvan",
   52,
 "Ana",
   49
];

array_push($familiares, "Salomao", 8);

//Array associativo :$familiares["nomeIrmao"] = "Salomão";

var_dump($familiares);

