<?php

/* 
1 - SOMA SEU MÊS DE NASCIMENTO O ANO ATUAL, EXIBIR
2 - CONCATENAR SEU PRIMEIRO NOME + ÚLTIMO NOME, EXIBIR
3 - SOMAR O VALOR 12,98 MAIS 9 MAIS 0,89, EXIBIR
4 - SOMAR ANO E MÊS (ATUAL) E DEPOIS DIVIDIR POR 10, EXIBIR
5 - CALCULE SUA IDADE BASEADA NA DATA DE NASCIMENTO
6 - CONCATENE SEU NOME E SOBRENOMES, USANDO VARIÁVEIS
7 - CONCATENE SEU PRIMEIRO NOME, SUA IDADE, SOBRENOME, ANO DE NASCIMENTO
8 - SOME DIA, MÊS E ANO ATUAL + DIA, MES, ANO DE NASCIMENTO
9 - USANDO APENAS A FUNÇÃO ECHO CONCATENAR NOME E SOBRENOME SEM USAR O "." NA CONCATENAÇÃO
*/

// 1 - SOMA SEU MÊS DE NASCIMENTO AO ANO ATUAL, EXIBIR
echo (10+2020);
echo '<br>';

// 2 - CONCATENAR SEU PRIMEIRO NOME + ÚLTIMO NOME, EXIBIR
echo 'Sandro' . 'Amancio';
echo '<br>';

// 3 - SOMAR O VALOR 12,98 MAIS 9 MAIS 0,89, EXIBIR
$valor1 = 12.98;
$valor2 = 9;
$valor3 = 0.89;

$soma = $valor1 + $valor2 + $valor3;

echo ($soma);
echo'<br>';

// 4 - SOMAR ANO E MÊS (ATUAL) E DEPOIS DIVIDIR POR 10, EXIBIR
$anoAtual = 2020;
$mesAtual = 2;

$totalDividido = ($anoAtual + $mesAtual)/10;

echo $totalDividido;
echo '<br>';

// 5 - CALCULE SUA IDADE BASEADA NA DATA DE NASCIMENTO
$anoNascimento = 1976;
$anoAtual = 2020;

$idade = ($anoAtual - $anoNascimento);

echo $idade;
echo '<br>';

// 6 - CONCATENE SEU NOME E SOBRENOMES, USANDO VARIÁVEIS
$primeiroNome = 'Sandro';
$sobrenome = 'Amancio';

echo "{$primeiroNome}{$sobrenome}";
echo '<br>';

// 7 - CONCATENE SEU PRIMEIRO NOME, SUA IDADE, SOBRENOME, ANO DE NASCIMENTO
$primeiroNome = 'Sandro';
$sobrenome = 'Amancio';
$anoNascimento = 1976;
$anoAtual = 2020;
$idade = 34;

echo ($primeiroNome . $idade . $sobrenome . $anoNascimento);
echo '<br>';

// 8 - SOME DIA, MÊS E ANO ATUAL + DIA, MES, ANO DE NASCIMENTO
$diaAtual = 13;
$mesAtual = 2;
$anoAtual = 2020;
$diaNascimento = 15;
$mesNascimento = 3;
$anoNascimento = 1976;
$somaTotal = $diaAtual + $mesAtual + $anoAtual + $diaNascimento + $mesNascimento + $anoNascimento;

echo $somaTotal;
echo '<br>';

// 9 - USANDO APENAS A FUNÇÃO ECHO CONCATENAR NOME E SOBRENOME SEM USAR O "." NA CONCATENAÇÃO */
echo 'Sandro' , 'Amancio';


