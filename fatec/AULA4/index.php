<?php

// $arrayEstado = [
//     'RJ' => 'RIO DE JANEIRO',
//     'SP' => 'SÃO PAULO',
//     'MG' => 'MINAS GERAIS',
//     'BA' => 'BAHIA'
// ];

// foreach($arrayEstado as $key => $value):

//     if ($key == 'BA'):
//         echo "$key - $value <br>";
//     endif;

// endforeach;


$arrayNumero = [33, 55, 1, 10, 100, 99, 1005, 25];

foreach($arrayNumero as $numero):

    if ($numero % 2 == 0):
        echo $numero . '<br>***************<br>';
        for ($i=0; $i < $numero ; $i++) :
            echo $i . '<br>';
        endfor;
    endif;

endforeach;






