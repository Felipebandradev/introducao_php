<?php
echo "\n\n == Chatbot da empresa biribinha ==\n\n";
echo "Opções Válidas:\n\n";
echo "1 Informações \n2 Reclamação \n3 Elogios \n4 status \n\n";





$opcao = readline ("Digite uma opção: ");

//condicional escolha
switch ($opcao){
	case 1:
		$resultado = "legal o que deseja saber?";
	break;
	
	case 2:
		$resultado = "Puxa, que pena...";
	break;
	
	case 3:
		$resultado = "Bacana pode falar fera";
	break;
	
	case 4:
		$resultado = "Aguarde um momento enquanto verifico...";	
	break;
	
	default:
		$resultado = "Ihh lascou vou chamar a valeska";
	break;
	
}

echo PHP_EOL;
echo $resultado;