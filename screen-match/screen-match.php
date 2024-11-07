<?php 


require __DIR__ . "/functions.php";



echo "Bem vindo(a) ao screen match! \n ";

$nomeFilme = "Top Gun - Maverick";

$nomeFilme = "Se beber não case";
$nomeFilme = "Thor: Ragnarok";



$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 8.8;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);
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

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2011,
    "nota" => 7.8,
    "genero" => "super-herói"
];

echo "Nome do filme:" .$nomeFilme . "\n";
echo "Nota do filme:" .$notaFilme . "\n";


exibeMensagemLancamento($anoLancamento);

$genero = match($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é ". $genero . "\n";

echo $argc . "\n";

incluidoNoPlano("teste", 2);
filmeLancamento(2019);

var_dump($notas);
sort($notas);
var_dump($notas);
var_dump(max($notas));



var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

            