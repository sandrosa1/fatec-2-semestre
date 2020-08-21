<?php

/*
* BASEADO NA QUANTIDADE DE CARACTERES DO SEU NOME DIVIDO 2
* IDENTIFIQUE SE O RETORNO É PAR OU ÍMPAR
* SE FOR PAR ADICIONE O DROBRO DA DIVISÃO OBTIDA
*/
// $resultado = strlen('WILLIAM') / 2;
// echo $resultado . '<br>';

// if ($resultado % 2 == 0):
//     echo 'par<br>';
//     echo ($resultado + ($resultado * 2));
// else:
//     echo 'ìmpar';
// endif;

/*
* EM UM CENÁRIO DE COMPRAS ACIMA 100 RECEBEM DESCONTOS DE 10%
* ABAIXO DE 100 RECEBEM ACRÉSCIMO DE 20%
* EXIBA O VALOR DE TUDO
*/

$valorCompra = 150;

if ($valorCompra >= 100):
    echo ($valorCompra - ($valorCompra * 0.10));
else:
    echo ($valorCompra + ($valorCompra * 0.20));
endif;





