<?php

// Array

$arrayEstadoCapital = [
  'AC' => 'RIO BRANCO',
  'AL' => 'MACEIÓ',
  'AP' => 'MACAPÁ',
  'AM' => 'MANAUS',
  'BA' => 'SALVADOR',
  'CE' => 'FORTALEZA',
  'DF' => 'BRASÍLIA',
  'ES' => 'VITÓRIA',
  'GO' => 'GOIÂNIA',
  'MA' => 'SÃO LUÍS',
  'MT' => 'MATO GROSSO',
  'MS' => 'MATO GROSSO DO SUL',
  'MG' => 'BELO HORIZONTE',
  'PA' => 'BELÉM',
  'PB' => 'JOÃO PESSOA',
  'PR' => 'CURITIBA',
  'PE' => 'RECIFE',
  'PI' => 'PIAUÍ',
  'RJ'=> 'RIO DE JANEIRO',
  'RN' => 'NATAL',
  'RS' => 'PORTO ALEGRE',
  'RO' => 'PORTO VELHO',
  'RR' => 'BOA VISTA',
  'SC' => 'FLORIANÓPOLIS',
  'SP' => 'SÃO PAULO',
  'SE' => 'ARACAJU',
  'TO' => 'PALMAS'
];


$arrayNorte = [];
$arrayNordeste =[];
$arrayCentroOeste = [];
$arraySudeste = [];
$arraySul = [];

// Funções ForEach para separar os estados correspondentes à região do país
foreach ($arrayEstadoCapital as $estados => $capitais) 
{
  if(($estados == 'AC')
      or ($estados == 'AP')
      or ($estados == 'AM') 
      or ($estados == 'PA') 
      or ($estados == 'RO') 
      or ($estados == 'RR') 
      or ($estados == 'TO'))
    {
    $arrayNorte[] = $estados;
    }

  if(($estados == 'AL')
    or ($estados == 'BA') 
    or ($estados == 'CE') 
    or ($estados == 'MA') 
    or ($estados == 'PB') 
    or ($estados == 'PE') 
    or ($estados == 'PI') 
    or ($estados == 'RN') 
    or ($estados == 'SE'))
  {
    $arrayNordeste[] = $estados;
  }

  if(($estados == 'DF') 
    or ($estados == 'GO') 
    or ($estados == 'MT') 
    or ($estados == 'MS'))
  {
    $arrayCentroOeste[] = $estados;
  }

  if(($estados == 'ES') 
    or ($estados == 'MG') 
    or ($estados == 'RJ') 
    or ($estados == 'SP'))
  {
    $arraySudeste[] = $estados;
  }
  if(($estados == 'PR') 
    or ($estados == 'SC') 
    or ($estados == 'RS'))
  {
    $arraySul[] = $estados;
  }
}


// Impressão das regiões previamente divididas.
echo '<hr> Número de estados: ' . sizeof($arrayEstadoCapital) .'<br>';

echo "<hr>*** Estados do Norte: " . sizeof($arrayNorte) . " ***<br>";
foreach($arrayNorte as $estados)
  echo "$estados <br>";


echo "<hr>*** Estados do Nordeste: " . sizeof($arrayNordeste) . " ***<br>";
foreach($arrayNordeste as $estados)
  echo "$estados <br>";


echo "<hr>*** Estados do Centro-Oeste: " . sizeof($arrayCentroOeste) . " ***<br>";
foreach($arrayCentroOeste as $estados)
  echo "$estados <br>";


echo "<hr>*** Estados do Sudeste: " . sizeof($arraySudeste) . " ***<br>";
foreach($arraySudeste as $estados)
  echo "$estados <br>";



echo "<hr>*** Estados do Sul: " . sizeof($arraySul) . " ***<br>";
foreach($arraySul as $estados)
  echo "$estados <br>";


