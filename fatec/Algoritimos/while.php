<?php
echo '1- Mostrar o intervalo de inteiros de 0 a 100 <br><br>';

$numero = 0;

while ($numero <= 100)
{
    echo "{$numero} - ";
    $numero ++;
}

echo "<hr>";
echo "2- Mostrar os impares entre 0 e 100 <br><br>";
$numero = 0;
while($numero <= 100)
{
    if($numero % 2 != 0)
    {
        echo "{$numero} - ";
    }
    $numero ++;
}

echo "<hr>";
echo "3- Mostrar os pares entre 10 e 100 e a somatória dos pares<br><br>";
$numero = 0;
$total =0;
while($numero <= 100)
{ 
    
    if($numero % 2 == 0)
    {
        echo "{$numero} - ";
        $total += $numero;
    }
    $numero ++;

}
echo "<br>";
echo "Soma do numeros pares = {$total}<hr>";

echo "6-Escreva um algoritmo que gere o números de 1000 a 1999 e escreva aqueles que dividido por 11 dão resto igual a 5.";
$total[] = "";
$numero = 1000;
while($numero <= 1999)
{ 
    
    if($numero % 11 == 5)
    {
        echo "{$numero} - ";
        $total = " , ".$numero;
    }
    $numero ++;

}
print_r($total);

