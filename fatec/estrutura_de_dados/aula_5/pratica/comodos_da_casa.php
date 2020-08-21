<?php

// Dividir os móveis de acordo com cômodos da casa.
// Imprimir os cômodos e seus respectivos móveis

// Declaração de uma array para os móveis
$arrayMoveis = ['geladeira', 'sofá', 'fogão', 'mesa de jantar', 'cama', 'guarda-roupa', 'escrivaninha', 'depurador de ar', 'televisão', 'rack', 'painel para tv', 'criado-mudo', 'abajour', 'estante', 'cadeira de escritório'];

// Declaração de array para cada cômodo
$arrayCozinha = [];
$arrayQuarto = [];
$arraySala = [];
$arrayEscritorio = [];

foreach ($arrayMoveis as $movel) :
  if (($movel === 'geladeira') || ($movel === 'fogão') || ($movel === 'depurador de ar')) :
    $arrayCozinha[] = $movel; //insere o móvel na array
  elseif (($movel === 'cama') || ($movel === 'guarda-roupa') || ($movel === 'criado-mudo') || ($movel == 'abajour')) :
    $arrayQuarto[] = $movel;
  elseif (($movel === 'sofá') || ($movel === 'televisão') || ($movel === 'rack') || ($movel === 'painel para tv')) :
    $arraySala[] = $movel;
  elseif (($movel === 'escrivaninha') || ($movel === 'estante') || ($movel === 'cadeira de escritório')) :
    $arrayEscritorio[] = $movel;
  endif;
endforeach;


// Imprime na tela os móveis em seus respectivos cômodos
echo "*** Móveis pertencentes à COZINHA: ***<br>";
foreach($arrayCozinha as $movel):
  echo "$movel<br>";
endforeach;

echo "<br>*** Móveis pertencentes ao QUARTO: ***<br>";
foreach ($arrayQuarto as $movel):
  echo "$movel<br>";
endforeach;

echo "<br>*** Móveis pertencentes à SALA: ***<br>";
foreach ($arraySala as $movel):
  echo "$movel<br>";
endforeach;

echo "<br>*** Móveis pertencentes ao ESCRITÓRIO: ***<br>";
foreach ($arrayEscritorio as $movel):
  echo "$movel<br>";
endforeach;