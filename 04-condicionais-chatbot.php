<?php
//04-condicioal-chatbot
echo "\n\n == Chatbot da empresa biribinha ==\n\n";
echo "Opções Válidas:\n\n";
echo "1 Informações \n2 Reclamação \n3 Elogios \n4 status \n\n";





$opcao = readline ("Digite uma opção: ");

//condicional encadeada
if($opcao == 1){
	$resultado = "legal o que deseja saber?";
} elseif ($opcao == 2){
	$resultado = "Puxa, que pena...";
} elseif ($opcao == 3){
	$resultado = "Bacana pode falar fera";
} elseif ($opcao == 4){
	$resultado = "Aguarde um momento enquanto verifico...";	
}else{
	$resultado = "Ihh lascou vou chamar a valeska";
}

echo PHP_EOL;
echo $resultado;
