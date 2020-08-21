<?php

// Variáveis em php é declarado com $
$nome = "Sandro";
$data = "15/03/1976";

// Aspas simples, somente string. 
echo 'Hello World <hr>';   
// Para entrada de variável, é necessário concatenar
echo 'Hoje é ' . $data;

// Aspas dulpas, permite entrada de variável
echo "My name is {$nome} e minha data de nascimento é {$data} <hr>";

echo "<br><h1>Este é um título feito em php</h1> <hr>";

echo $_SERVER['HTTP_USER_AGENT'].'<hr>';

if(strtoupper($nome) !== 'SANDRO') {
  echo '<br>Não é maiúsculo';
} else {
  echo '<br>É maiúsculo';
}
echo'<hr>';
//phpinfo();
