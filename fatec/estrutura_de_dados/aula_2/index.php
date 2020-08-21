<?php

// TIPOS DE VARIÁVEIS - para o uso na matéria de estrutura de dados.
$variavelInteiro = 133; // Se quiser fazer aparecer 0133, deve-se tratar como string

$variavelFloat = 10.7800;

$variavelString = 'Sandro';

$variavelBoolean = false; // true ou false

$variavelArray = ['nome' => 'Sandro', 1 => 100]; // 'chave' atribui valor 'Sandro'. Estrutura para atribuição dentro do vetor

// object não será utilizado na matéria de estrutura de dados.

/////////////////////////////////////////////////////////////////////////////////////////////////////////

// OPERADORES DE COMPARAÇÃO
/*
  Sinal de atribuição =
  Sinal de comparação do valor ==
  Sinal de comparação do valor e tipo ===
*/
$v1 = 10;
$v2 = '10';

if ($v1 == $v2):
  echo 'igual';
else:
  echo 'diferente';
endif;
echo '<hr>';
// Resultado 'igual'

if ($v1 === $v2):
  echo 'igual';
else:
  echo 'diferente';
endif;
// Resultado 'diferente'
echo '<hr>';


if(strpos($variavelString, 'C') === 0):
  echo '<br>Encontrou<br>';
else:
  echo '<br>Não encontrou<br>';
endif;


////////////////////////////////////////////////////////////////////////////////////////////

// OPERADORES MATEMÁTICOS
/*
  + : Adição
  - : Subtração
  / : Divisão
  * : Multiplicação
  % : Resto da divisão
*/

$var1 = 10;
$var2 = '10';
$total = 0;

$total = ($var1 + $var2);
echo 'Resultado' . $total .'<br>';
echo "Resultado {$total} <br>";

print_r($variavelArray); //Imprime na tela o 'código', como é gravado.

var_dump($variavelArray);

