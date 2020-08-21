<?php
// Aula 3 - Estruturas condicionais if/ else/ ifelse

// OR -> se alguma expressão atender, então será verdadeiro
if((1 == 1) or (2 == 2)):
  echo 'igual' . '<br>';
else:
  echo 'diferente' . '<br>';
endif;

// E -> todas as expressões devem atender para ser verdadeiro, senão a estrutura será falsa
if((1 == 2) and (2 == 2)):
  echo 'igual' . '<br>';
else:
  echo 'diferente' . '<br>';
endif;

// Verifica se o número é par ou impar - Uso do ELSE
if (10 % 2 == 0):
  echo 'par' . '<br>';
else:
  echo 'impar' . '<br>';
endif;

// Uso do ELSE IF
$creditoDisponivel = 100;
if($creditoDisponivel >= 100):
  echo 'pode comprar' . '<br>';
elseif($creditoDisponivel < 0):
  echo 'você está no negativo' . '<br>';
elseif($creditoDisponivel == 0):
  echo 'você não possui saldo' . '<br>';
endif;

// função strlen($var) mostra a quantidade de caracteres 
$nome = 'PEDRO';
if(strlen($nome) == 5):
  echo 'possui 5 caracteres' . '<br>';
else:
  echo 'diferente de 5 caracteres' . '<br>';
endif;

$a = 10;
$b = 12;
if(($a + $b) == 22):
  echo '22' . '<br>';
else:
  echo 'outro valor' . '<br>';
endif;

// SWITCH CASE
$mes = date('m'); // Função date('m') retorna o valor como string
// echo $mes;
switch($mes):
  case '01': echo 'Janeiro' . '<br>'; 
  break;
  case '02': echo 'Fevereiro' . '<br>'; 
  break;
  case '03': echo 'Março' . '<br>'; 
  break;
  case '04': echo 'Abril' . '<br>';
 break;
  default: echo 'Não encontrado' . '<br>';
endswitch;

// 