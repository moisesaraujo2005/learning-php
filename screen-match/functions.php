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