<?php
echo PHP_EOL;
$produto = readline ("Informe Produto: ");

$preco = readline ("Informe Preço: ");

if ($preco >= 1000 && $preco <= 1500){
	$desconto = "O preço ".$preco." está no intervalo indicado então tera um desconto de 10%";
} else{
	$desconto = "O preço ".$preco." está fora do intervalo indicado e terá um desconto de 5%";
}
echo PHP_EOL;
echo $desconto;

?>