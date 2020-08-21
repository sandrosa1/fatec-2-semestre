<?php

if(1==1):
    for ($i=0; $i < 0; $i++): 
        while ($a <= 10):
            foreach ($variable as $key => $value):
                # code...
            endforeach;
        endwhile;
    endfor;
endif;

/**
 * 1) - Crie um algoritmo que receba um número digitado pelo usuário e
 *  verifique se esse valor é positivo, negativo ou igual a zero. 
 *  A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
 */

// $var = -1;

// if($var > 0)
// {
//     echo 'Positivo';
// }
// if($var < 0)
// {
//     echo 'Negativo';
// }
// if($var == 0)
// {
//     echo 'Numero igual a zero';
// }

/**
 * 2) Crie um algoritmo que solicite a entrada de um número,
 *  e exiba a tabuada de 0 a 10 de acordo com o número solicitado,
 *  ex:Saída = 4 X 0 = 0...4 X 10 = 40.
 *  
*/
$max = '10';
$var = "1";
$contador ='0';

for($contador=0; $contador <= 10 ; $contador++)
{
    for($vari = $var; $vari <= $max ; $vari++)
    {
        echo $vari."x". str_pad($contador, 2,'0',STR_PAD_LEFT)
                    ."=".str_pad($contador * $vari, 3,'0',STR_PAD_LEFT)." | ";
    }
    echo '<br>';


}



$fatorial = 5;
$res = 1;
// 5x4 x3x2x1 =

for($fat = $fatorial; $fat >= 1; $fat--)
{
    $res = $fat * $res;
}
echo $res;


