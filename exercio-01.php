<?php

$nome_curso = readline("Informe o nome do curso: ");
$carga_horaria = readline("Informe carga horária de ".$nome_curso.": ");
//$hora_dia = readline ("Informes horas de aula por dia: ");

$falta = $carga_horaria / 4;
//$falta = $carga_horaria / $hora_dia;
echo PHP_EOL;
echo "Para o curso: ".$nome_curso."\nCom a carga horária ".$carga_horaria."horas \nO limite de faltas é de ".$falta."horas.";

?>
