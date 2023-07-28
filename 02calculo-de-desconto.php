<?php
//calculo de desconto

//entrada
//versão 01
//echo "Informe produto:";
//$produto = readline();

//versão 2
$produto = readline("Informe produto: ");
$preco_inicial = readline("Informe o preço: ");
$desconto = readline ("desconto em reais: ");

//processamento
$preco_final = $preco_inicial - $desconto;
//saída
echo "Preço Final: ".$preco_final;

?>