<?php


$nome = 'Guilherme';

echo $nome;

echo 'O meu nome é' .$nome;

 $Guilherme  = 'Bla bla!';

 echo $$nome; //Bla bla

if($nome == 'Guilherme') {
echo 'Verdadeiro';
}

else {
    echo 'Falso';
}

for($i = 0; $i <10; $i++) {
    echo $i;
    echo '<hr>';
}

$i = 0;

while($i <10) {
    echo $i;
    echo '<br>';
    $i++;
}

printNumero(30);
function printNumero($n){
    echo $n;
}

class Pessoa{
    private $nome;
    private $idade;

    public function _construnct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade; 
    }

    public function printNomeIdade() {
        echo $this->nome;
        echo '<br>';
        echo $this->idade;
    }
}

$pessoa = new Pessoa('Guilherme', '26');

$pessoa->printNomeIdade();

$arr = ['Guilherme', 'Joao','Felipe'];
echo $arr[0];

?>