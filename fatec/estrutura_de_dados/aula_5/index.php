<?php

// Relembrando a aula antes da pandemia
// array, for e foreach

// Funções de array:
$carros = ['gol', 'fusca', 'gol'];
echo '<hr>Excluir elementos duplicados <br>';
$carrosUnicos = array_unique($carros);
echo '<pre>';
print_r($carrosUnicos);
echo '</pre>';

echo '<hr>Concatena arrays em uma nova array<br>';
$carros2 = ['corola', 'palio'];
$carrosTotal = array_merge($carros, $carros2);
echo '<pre>';
print_r($carrosTotal);
echo '</pre>'; 

echo '<hr>Filtra a array de acordo com o comando da função callback.<br>';
$numeros = [5,99,55,44,9,75,6];

function filtrar($valor){
  return $valor <= 20;
}
echo '<hr>';
echo 'Novo array com o valor filtrar';
$novoArray = array_filter($numeros, 'filtrar');

echo '<pre>';
print_r($novoArray);
echo '</pre>';

echo '<hr>Ordenar os números em ordem crescente<br>';
//$numeros = [5,99,55,44,9,75,6];
sort($numeros);
echo '<pre>';
print_r($numeros);
echo '</pre>';

echo '<hr>Ordenar os números em ordem decrescente<br>';
//$numeros = [5,99,55,44,9,75,6];
rsort($numeros);
echo '<pre>';
print_r($numeros);
echo '</pre>';


echo '<hr>Ordena a array pelo valor (chave-valor)<br>';
$nomes =[
  ['nome' => 'joana'],
  ['nome' => 'ana'],
  ['nome' => 'silvana']
];

asort($nomes);
echo '<pre>';
print_r($nomes);
echo '</pre>';

echo '<hr>Ordena a array pela chave (chave-valor)<br>';
$feira =[
  'fruta'=> 'Abacaxi',
  'legume' => 'batata',
  'hortaliça' => 'alface'
];

ksort($feira);
echo '<pre>';
print_r($feira);
echo '</pre>';

