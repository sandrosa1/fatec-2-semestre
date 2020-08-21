<?php

echo 'Lista de Exercícios Recursividade <br>';

$fat = 6;
echo "1) Fatorial de ele tem um limite por conta da memorai insuficiente <br>";

function  Fatorial($fatorial)
{
    if($fatorial == 0) return 1;
    return $fatorial * Fatorial($fatorial - 1); 
}
$resultado = Fatorial($fat);
echo " O fatorial de {$fat} é igual a : $resultado .<hr>";
//-------------------------------------------------------------------------------------------------------//

$num1 = 31;
echo "2) Mostrar os números pares de 0 até o número {$num1}.<br>";

function Pares($num, $i)
{
    if($i >= $num) return;
    echo "{$i}/ ";
    Pares($num, $i + 2);
}

Pares($num1, 0);
echo "<hr>";
//----------------------------------------------------------------------------------------------------//

$num2 =48;
echo "3) Mostrar a soma de todos os números ímpares que são múltiplos de três e que estão entre 0 e o números {$num2} <br>";

function SomaImparMultiplos3($n)
{
    if($n == 0) return 0;
    if($n % 3 != 0) $n = $n - ($n % 3);
    if($n % 2 == 0) $n = $n - 3;
    return $n + SomaImparMultiplos3($n - 3);
}

$res = SomaImparMultiplos3($num2);
echo "A soma dos numeros impare multiplos de 3 e {$res}<hr>";
//-------------------------------------------------------------------------------------------------//

$num3 = 19;
echo "4) Mostrar a soma dos números inteiros entre 0  ate {$num3}.<br>";

function SomaTodosNumerosInteiros($a)
{    
    if($a == 0) return 0;
    return $a + SomaTodosNumerosInteiros($a - 1);
}

$res1 = SomaTodosNumerosInteiros(19);
echo "A soma de todos so numeros inteiros e {$res1} <hr>";
//------------------------------------------------------------------------------------------------------//

$fibonacci = 6;
echo '5) Implementar um programa recursivo em PHP  que imprima qual o “n ” termo da série de Fibonacci. n = (1,1,2,3,5,8.....) <br>';

function Fibonacci($b)
{
    if($b == 0 ) return 0;
    if($b == 1) return 1;
    return Fibonacci($b -1) + Fibonacci($b -2);
}

$res2 = Fibonacci($fibonacci);
echo "O numero {$fibonacci} na sequência de Fiobonacci e; {$res2}<hr>";
//------------------------------------------------------------------------------------------------------//

$num4 = 10;
echo "6) Defina um programa recursivo para, dado um número {$num4}, imprimi-lo em base binária.<br>";

function Binario(int $num4, string $var)
{
    if($num4 == 0) return $var;
    Binario($num4 / 2, $var);
    if($num4 % 2 == 0)
    {
        echo 0;
    }else
    echo 1;
}
$var = " ";
$res3 = Binario($num4, $var);


echo "7) Soma de dois números naturais, através de incrementos sucessivos<br>
Exemplo: 6 * 4 = 4+4+4+4+4+4 <br>";


function FunctionSomaNaturais(int $num5, int $num6)
{
    if($num5 == 0 ) return;

    return $num6 + FunctionSomaNaturais($num5 -1, $num6);
}


$res4 = FunctionSomaNaturais(5 , 3);

echo "Resustado = {$res4}";