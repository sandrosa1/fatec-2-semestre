<?php

# FOREACH

// $arrayCidades = [22, 'nome', false, 12.0]; Exemplo de array, que recebe vários tipos de valores.
/*
$arrayEstados = ['SP', 'MG', 'RJ', 'SC'];

echo '<pre>';
var_dump($arrayCidades);
echo '<hr>';
print_r($arrayCidades);
echo '</pre>';
echo '<hr>';

// a variável $item armazena o elemento do array a cada iteração. Esta variável foi criada somente dentro do escopo do foreach.
foreach($arrayEstados as $item):
  echo $item . '<br>';
endforeach;
*/

// Dentro de array, o sinal de atribuição é =>
// Neste exemplo os 'RJ', 'SP' são os índices, ao invés de números
$arrayEstado = [
  'RJ' => 'RIO DE JANEIRO',
  'SP' => 'SÃO PAULO',
  'MG' => 'MINAS GERAIS'
];

// $banana são as chaves ('RJ', 'SP', 'MG')
// $abacaxi são os valores ('RIO DE JANEIRO, SÃO PAULO, MINAS GERAIS)
foreach($arrayEstado as $banana => $abacaxi)
  echo "$banana - $abacaxi <br>";


///////////////////EXERCÍCIOS EXTRAS////////////////////
# 1. Exibir o nome dos alunos da sala em uma tabela;

$arrayAlunos = ['Marcos', 'Gustavo', 'Silvio', 'Xandão', 'Doug', 'Rapha', 'Vivi', 'Dino', 'Dario', 'Artur', 'Alejandro', 'Daniel', 'Paulo', 'Helena'];

echo '<table border = 1px;>
        <th>Alunos</th>';
foreach($arrayAlunos as $item):
  echo "<tr>
          <td>$item</td>
        </tr>";
endforeach;
echo '</table>';


# 2. Exiba uma agenda de telefone em uma tabela (a chave é o onme da pessoa e o valor o telefone);

$arrayAgenda = 
[
  'lucio' => '(11) 99927-3061',
  'Gustavo' => '(11) 97359-8664',
  'Silvio' => '(11) 99927-5637',
  'Padaria' => '(11) 5745-5513',
  'Colégio Benjamin Constant' => '(11) 5842-5485'
];

echo '<table border = 1px;>
        <th>Nome</th>
        <th>Telefone</th>';

// foreach($arrayAgenda as $nome => $telefone):
//   echo "<tr>
//           <td>$telefone</td>
//           <td>$$nome</td>
//         </tr>";
// endforeach;

echo '</table>';

function tabela($arrayAgenda)
{
  foreach($arrayAgenda as $nome => $telefone)
    echo "<tr>
            <td>$nome</td>
            <td>$telefone</td>
          </tr>";
}
tabela($arrayAgenda);