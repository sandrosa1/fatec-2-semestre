<?php



//  for dentro do for (tabuada)
// para (i = 1 ; faça de i ate chegar 10; a cada fim de interação acrescente mais 1 )
// for($i = 1; $i <= 10; $i++)
// {
//   // para (j = 1 ; faça de j ate chegar 10; a cada fim de interação acrescente mais 1 )
//   for($j = 0; $j <= 10; $j++)
//   {
    
//     echo "{$i} * {$j} = " . ($i * $j) . '<br>';

//   }

//   echo '<hr>';
// } 


// De 1 a 100, mostre os valores menores ou iguais a 5
// for($i = 1; $i <= 100; $i++)
// {
//   // Quando temos apenas uma condição não precisa de parentes ou endif.
//   if($i <= 5)
//     echo $i . '<br>';
  
// }

// De 0 a 10, mostre o resultado da tabuada do 2

// for($i = 0; $i <= 10; $i++)
// {

//   echo "2 * {$i}= " . ($i*2) . '<br>';

// }


//  De 0 a 100 imprimima os múltimplos de 2


// Este loop requer muita atenção, sempre precisa 
//  fazer o incremento para nao entrar em loop infinito.

$i = 0;
while($i <= 100)
{
  echo $i . '<br>';
  $i +=2;
} 



