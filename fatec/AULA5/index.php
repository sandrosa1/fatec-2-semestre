<?php
// $numeros = [ 'texto', 'texto2', 1, 19.5, 'text99' ];

// 5 TOTAL DE ELEMENTOS
// 4 INDICE DO ÚLTIMO

// for ($i=0; $i <= count($numeros) ; $i++) [] 
//     echo $numeros[$i] . '<br>';
// }
    
// foreach ($numeros as $banana) {
//     echo $banana . '<br>';
// }

// $carros1 = [ 'golf', 'fiesta', 'gol' ];
// echo '<pre>';
// print_r($carros1);
// echo '</pre>';

// $carros2 = [ 'corola', 'palio' ];
// $carrosFinal = array_merge($carros1, $carros2);
// echo '<pre>';
// print_r($carrosFinal);
// echo '</pre>';

// echo '<pre>';
// print_r($carros);
// echo '</pre>';

// // EXCLUIR ELEMENTOS DUPLICADOS
// $carrosLimpo = array_unique($carros);
// echo '<pre>';
// print_r($carrosLimpo);
// echo '</pre>';

// FLTRAR ELEMENTOS ARRAY
// $numeros = [ 5, 99, 55, 44, 9, 73, 6 ];

// // ORDENNA CRESCENTE
// sort($numeros);

// echo '<pre>';
// print_r($numeros);
// echo '</pre>';

// // ORDENNA DECRESCENTE
// rsort($numeros);

// echo '<pre>';
// print_r($numeros);
// echo '</pre>';



// function filtrar($valor){
//     return $valor <= 20;
// }
// $novoArray = array_filter($numeros, 'filtrar');
// echo '<pre>';
// print_r($novoArray);
// echo '</pre>';

// $palavras = [ 'joema', 'ana', 'silvia', 'joana' ];

// // ORDENNA CRESCENTE
// sort($palavras);

// echo '<pre>';
// print_r($palavras);
// echo '</pre>';

// // ORDENNA DECRESCENTE
// rsort($palavras);

// echo '<pre>';
// print_r($palavras);
// echo '</pre>';

//$palavras = [ 'joema', 'ana', 'silvia', 'joana' ];

$clientes = [
    [ 'nome' => 'joema' ],
    [ 'nome' => 'ana'   ],
    [ 'nome' => 'silvia' ],
    [ 'nome' => 'joana' ]
];

arsort($clientes);
echo '<pre>';
print_r($clientes);
echo '</pre>';