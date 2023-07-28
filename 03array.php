<?php
//03-array

/* objetivo: como declarar e atribuir e acessar dados de vetores */

//declaração do array(opcional)

$pessoas = [];// ou $pessoas = array();

//processo de atribuição de dados

//$pessoas[0] = "Jhon Oliva";
//$pessoas[1] = "David Gilmur";
//$pessoas[2] = "Ozzy Osbourne";


//Versão com entrada interativa

$pessoas[0] = readline("Digite o nome da primeira pessoa: ");
$pessoas[1] = readline("Digite o nome da segunda pessoa: ");
$pessoas[2] = readline("Digite o nome da terceira pessoa: ");

//Saída
echo "\n\n";
echo "Primeira pessoa: ".$pessoas[0]."\nSegunda pessoa: ".$pessoas[1]."\nTerceira pessoa: ".$pessoas[2]; 
?>