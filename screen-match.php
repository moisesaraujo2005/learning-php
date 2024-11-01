<?php 

echo "Bem vindo(a) ao screen match! \n ";

$nomeFilme = "Top Gun - Maverick";

$nomeFilme = "Se beber não case";
$nomeFilme = "Thor: Ragnarok";



$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 8.8;
$incluidoNoPlano = true;

$quantidadeDeNotas = $argc - 1;

$notas=[];

for($i = 0; $i<$argc; $i+=1) {
    $notas[] = (float)  $argv[$i];
}
$somaDeNotas = 0;

var_dump($notas);

for ($i=0; $i < count($notas); $i++) { 
  $somaDeNotas+= $notas[$i];
}



$notaFilme = array_sum($notas) / $quantidadeDeNotas;

echo $notaFilme;


echo $nomeFilme;

echo "Nome do filme:" .$nomeFilme . "\n";
echo "Nota do filme:" .$notaFilme . "\n";
echo "Ano do filme:" .$anoLancamento . "\n";


if($anoLancamento > 2022) {
 echo "Esse filme é um lançamento";
}

else if ($anoLancamento > 2020 && $anoLancamento <=2022) {
    echo "Esse filme ainda é novo \n";
} 


else {
    echo "Esse filme não é lançamento \n";
}

$genero = match($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é ". $genero . "\n";

echo $argc;
