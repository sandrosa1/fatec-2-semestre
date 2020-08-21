<?php

date_default_timezone_set('America/Sao_Paulo');

// 1- Baseado no dia de hoje identifique se o número é par
$dia = 20;
if ($dia % 2 == 0):
  echo 'par' . '<br>';
else:
  echo 'impar' . '<br>';
endif;
echo '<hr>';

// 2 - Baseado na lei da aposentadoria (homem 65 anos e mulher 60 anos), identifique quantos anos falta para você se aposentar
$genero = 'feminino';
$idadeFeminino = 60;
$idadeMaculino = 64;
$idade = '34';

if($genero == 'feminino'):
  echo 'Faltam ' . ($idadeFeminino - $idade);
else:
  echo 'Faltam ' . ($idadeMaculino - $idade);
endif;
echo '<hr>';

// 3 - Em um cenário de venda onde compras acima de 100 recebem desconto de 10%, compras abaixo de 100 reais recebem acréscimo de 20%. Exiba os valores da venda, desconto e acrécimo
$valorVenda = 100;
$desconto = 0;
$acrescimo = 0;
if($valorVenda >= 100):
  $desconto = $valorVenda * (10/100);
  echo 'Valor de venda: ' . ($valorVenda - $desconto) .'<br> Valor do desconto: ' . ($desconto) . '<br>';
else:
  $acrescimo = $valorVenda * (20/100);
  echo 'Valor de venda: ' . ($valorVenda + $acrescimo) . '<br> Valor do acréscimo: ' . ($acrescimo) . '<br>';
endif;

echo '<hr>';

// 4 - Se a data de hoje vezes 6% for maior que 10, exiba o texto maior e os valores obtidos da conta de porcentagem, senão só exiba a data de hoje mais 100 se ela for impar

$data = 20;
$dataPorcentagem = $data * 0.06;

if ( $dataPorcentagem > 10):
  echo 'maior' . ' O valor é: '. $dataPorcentagem;
elseif ($data % 2 != 0):
  echo ($data + 100);
else:
  echo 'digite outra data';
endif;
echo '<hr>';

// 5 - Usando o SWITCH CASE, exiba o dia da semana por extenso começando de 1 à 7
$dia = 7;

switch($dia):
  case 1: echo 'Domingo' . '<br>';
  break;
  case 2: echo 'Segunda' . '<br>';
  break;
  case 3: echo 'Terça' . '<br>';
  break;
  case 4: echo 'Quarta' . '<br>';
  break;
  case 5: echo 'Quinta' . '<br>';
  break;
  case 6: echo 'Sexta' . '<br>';
  break;
  case 7: echo 'Sábado' . '<br>';
  break;
  default: echo 'Digite o número de 1 a 7';
endswitch;
echo '<hr>';

// 6 - Baseado na quantidade de caracteres do seu nome dividido por 2, identifique se o retorno é par ou ímpar e se for par, adicione o dobro da divisão obtida

$nome = 'LUCAS';
$numeroCaracteres = strlen($nome);
$divisãoCaractere = $numeroCaracteres/2;

if ($divisãoCaractere % 2 == 0):
  echo 'O dobro é: ' . ($numeroCaracteres + ($divisãoCaractere * 2));
else:
  echo 'Digite outro nome';
endif;