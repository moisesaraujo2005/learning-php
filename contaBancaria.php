<?php

$contaBancaria = [
    "nome" => "Moisés",
    "saldo" => 1000
];

$numeroDigitado = 0;

// Exibe as informações da conta antes do loop
echo "******************\n";
echo "   Titular:  {$contaBancaria['nome']}\n";
echo "   Saldo: {$contaBancaria['saldo']}\n";
echo "******************\n\n";

while ($numeroDigitado != 4) {
    
    echo "Digite algumas das opções:\n";
    echo "1 - Consultar saldo atual\n";
    echo "2 - Sacar dinheiro\n";
    echo "3 - Depositar dinheiro\n";
    echo "4 - Sair\n";


    $numeroDigitado = (int)trim(fgets(STDIN));

    switch ($numeroDigitado) {
        case 1:
            echo "Seu saldo atual é: {$contaBancaria['saldo']}\n";
            break;
        case 2:
            echo "Digite o valor a sacar \n";
            $valorSacar = (int)trim(fgets(STDIN));
            if($valorSacar > $contaBancaria['saldo']) {
                echo 'Saldo insuficiente pra sacar \n';
            }
            else {
                $contaBancaria['saldo'] -= $valorSacar;
            }
            
            break;
        case 3:
            echo "Digite o valor a depositar \n";
            $valorDepositar = (int)trim(fgets(STDIN));  
            
            
            $contaBancaria["saldo"] += $valorDepositar;

           
            break;
        case 4:
            echo "Adeus...\n";
            break;
        default:
            echo "Opção inválida! Tente novamente.\n";
    }
}
