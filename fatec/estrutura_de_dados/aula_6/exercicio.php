<?php

$pessoas = [
    ['nome' => 'joão', 'sexo' => 'M', 'idade' => 66],
    ['nome' => 'joana', 'sexo' => 'F', 'idade' => 35],
    ['nome' => 'rodrigo', 'sexo' => 'M', 'idade' => 55],
    ['nome' => 'jessica', 'sexo' => 'F', 'idade' => 61],
    ['nome' => 'marcela', 'sexo' => 'F', 'idade' => 32],
    ['nome' => 'pedro', 'sexo' => 'M', 'idade' => 18],
];

echo'<hr>1 - EXIBIR A QUANTIDADE DE ELEMENTOS DO ARRAY<br>';

echo 'Quantidade de Elementos: ' . count($pessoas) . ' elementos<br>';
echo '**************************************************<br>';


echo '<hr>2 - ORDENAR E EXIBIR OS ELEMENTOS EM ORDEM ALFABÉTICA BASEADO NO NOME<br>';
echo 'Ordenado por Nome:<br>';
asort($pessoas);

$i = 0;
foreach($pessoas as $pessoa )
  foreach($pessoa as $key => $valor)
  {
    echo "$valor ";
    if($i != 2)$i++;
    else
    {
      echo '<br>';
      $i =0;
    }
  }






echo '**************************************************<br>';

// // 3 - USANDO FOREACH IDENTIFICAR O ELEMENTO EXIBINDO NOME E IDADE QUE PODE APOSENTAR, CONFORME REGRA DO GOVERNO
// // HOMEM >= 65 ANOS
// // MULHER >= 60 ANOS
// foreach($pessoas as $value):
//   if(($value['sexo'] === 'M') && ($value['idade'] >= 65)):
//     echo "$value[nome] - $value[idade]<br>";
//     elseif(($value['sexo'] === 'F') && ($value['idade'] >= 60)):
//       echo "$value[nome] - $value[idade]<br>";
//     endif;
// endforeach;
// /* 
// Resolução do prof
// foreach($pessoas as $value):
//   if(($value['sexo'] === 'M') && ($value['idade'] >= 65) || ($value['sexo'] === 'F') && ($value['idade'] >= 60)):
//       echo "$value[nome] - $value[idade]<br>";
//     endif;
// endforeach;
// */

// echo '**************************************************<br>';
// // 4 - COM BASE NO ARRAY PRINCIPAL CRIAR 2 ARRAYS, 1 COM ELEMENTOS FEMININOS E OUTRO MASCULINO
// $homens = [];
// $mulheres = [];
// foreach($pessoas as $value):
//   if(($value['sexo'] === 'M')):
//     $homens[] = $value['nome'];
//     elseif(($value['sexo'] === 'F')):
//     $mulheres[] = $value['nome'];
//   endif;
// endforeach;
// echo 'Homens da lista:<br>';

// foreach($homens as $nome):
//   echo "- $nome <br>";
// endforeach;

// echo '<br>Mulheres da lista:<br>';

// foreach($mulheres as $nome):
//   echo "- $nome <br>";
// endforeach;

// /* Resolução do prof
// foreach($pessoas as $value):
//   if(($value['sexo'] === 'M')):
//     $homens[] = $value['nome'];
//     else:
//     $mulheres[] = $value['nome'];
//   endif;
// endforeach;
// */

// echo '**************************************************<br>';
// // 5 - EXIBIR QUANTIDADE DE ELEMENTOS FEMINIOS E MASCULINOS
// echo 'Quantidade de Mulheres: ' . count($mulheres).'<br>';
// echo 'Quantidade de Homens: ' . count($homens).'<br>';