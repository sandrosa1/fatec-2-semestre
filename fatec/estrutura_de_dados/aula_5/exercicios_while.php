<?php

// echo 'Utilizando while com a !$negação da variavel<hr>';

// $fim = false; //Fim recebe false
// $contador = 0;  
// while (!$fim) // Enquanto a negação de fim, ou seja quando fim nao for verdadeiro
// {                                  //faça
//   echo "Linha $contador<br>";  // imprime a linha contador
//   if ($contador == 5)     // se contador igual a 5 $fim = verdadeiro
//   {
//     $fim = true;           
//   }
//   $contador++;  // senão acrescenta mais um a variavel contador e faça a  verificação while
// }
// echo '<hr>';



// echo 'Utilizando a igualdade da variavel<hr>';
// $letra = 'A';
// $contador = 5;
// while ($letra == 'A')  // Enquanto a variavel for igual a A
// {                          //  Faça
//   echo "Linha $contador<br>";  // Imprime linha contador

//   if ($contador == 10)    // contador e igual a 5 se sim variavel letra recebe B
//   {
//     $letra = 'B';
//   }
//   $contador++; // Senão varaivel contador acrescenta mais um
// }
// echo '<hr>';




// echo 'Utilizando o break para dar mais agilidade ao codigo<hr>';
// $letra = 'A';
// $contador = 0;
// while ($letra == 'A')
// {
//   echo "Linha $contador<br>";
//   //break; //Finaliza o loop imediatamente. Não entra no if
//   if ($contador == 5)
//   {
//   $letra = 'B';
//   //break; // Ja encerra quando a condição if for satisfeita e não faz a verificação do while
//   }
//   $contador ++;
// }
// echo '<hr>';

# PARÂMETROS VIA URL:
# .../index.php?codigo=12&nome=sandro
# - & adiciona outros parâmetros
# - o espaço na URL é tratada como %20

# Instrução Ternária:
# É o if em uma linha que verifica condições booleanas
# (__) ? __ : __ ;
# () -> o que se quer verificar
# ? -> após o interrogação roda a instrução true
# : -> após o dois pontos roda a instrução false

// echo 'Passando valores pela URL exercicios_while.php.php?codigo=12&nome=sandro';
// $parametroUrl = $_GET['codigo'];
// $parametroUrl2 = (isset($_GET['nome'])) ? $_GET['nome'] : 'não existe valor';
// echo $parametroUrl . '<br>';
// echo $parametroUrl2 . '<br>';


// echo 'Passando valores pela URL exercicios_while.php.php?limite=4 <hr>';
// $limite = $_GET['limite'];
// $contador = 0;
// while($contador != $limite):
//   echo $contador . '<br>';
//   $contador++;
// endwhile;


// echo '<br>';
// $i = '0';
// for ($i = 0; $i <=5; $i++){
//   echo $i . '<br>';
// }
// echo '<hr>';


// ////////////////// EXERCÍCIOS //////////////////

// # 1. Capturando um limite via URL, execute um loop while somando os números a cada iteração, exiba o resultado no final;
// echo 'Passe o valor pela URL exercicios_while.php.php?limite=4 <hr>';
// $limite = $_GET['limite'];
// $contador = 0;
// $soma = 0;
// while($contador != $limite) // enquanto contador for diferente da variavel limite
// {                               //faça
//   $soma = $soma + $contador; 
//   $contador++ . '<br>';
// }
// echo "$soma <br>";

// # 2. Capture um limite e um segundo número via URL e
// execute um loop com WHILE, rodando o loop até chegar no 
// valor do segundo parâmetro informado na URL
// echo 'Declare na URL a variaveis?var1=1&var2=5<hr>';

// $var1 = $_GET['var1'];
// $var2 = $_GET['var2'];
// $contador = 0;

// while($var1 != $var2)  //Enquanto as variaveis forem difentes 
// {  
//   if($var1 < $var2)
//   {
//     echo "{$var1} != {$var2} <br>";
//     $var1++;
//   }
//   elseif($var1 > $var2)
//   {
//     echo "{$var1} != {$var2} <br>";
//     $var1--;
//   }

// }
// echo "{$var1} == {$var2}"; 



// $var1 = $_GET['var1'];
// $var2 = $_GET['var2'];
// $contador = 0;

// if(($var1 < 0) | ($var2 < 0))
// {
//   echo 'Digite numeros positvos';
// }

// elseif($var1 <= $var2)
// {
//   while($contador <= $var1) //Enquanto contador for menor uo igual a var1
//   {                              // faça
//     if($var2 == $contador)         //Var2 e igual a contador? Se sim pare a verificação
//       break;
//     $contador++;                      //Senão contador recebece mais um
//     echo "{$contador} != {$var2} <br>";
//   }
  
// }

// else
// {
//   echo 'Digite o segundo valor maior que o primeiro';
// }


// # 3. Capture um parâmetro via URL, que vai informar o
// tipo de exibição de dentro do loop, 
//pode ser par ou ímpar, execute o loop até 100 
//exibindo os valores par ou ímpar conforme passado

$tipo = $_GET['tipo']; 
$i = 0;

while($i <= 100) //Enquanto var i for menor ou igual a 100
{                  //Faça
  if(($tipo === 'par') && ($i % 2 == 0))
    echo $i . '<br>';
  elseif(($tipo === 'impar') && ($i %2 == 1))
    echo $i . '<br>';
  
  $i++;
}


