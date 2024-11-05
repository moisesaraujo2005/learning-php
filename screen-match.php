<?php 


function exibeMensagemLancamento (int $ano):void {
    if($ano > 2022) {
        echo "Esse filme é um lançamento";
       }
       
       else if ($ano > 2020 && $ano <=2022) {
           echo "Esse filme ainda é novo \n";
       } 
       
       
       else {
           echo "Esse filme não é lançamento \n";
       }
       
}


function incluidoNoPlano(bool $planoPrime, int $anoLancamento):bool {
    return  $planoPrime || $anoLancamento <2020;
}

function filmeLancamento(int $anoLancamento) {
    if($anoLancamento > 2020) {
        echo "É lançamento";
    }
    else 
    {
    echo "Não é lançamento";
}}



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


echo $nomeFilme;

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