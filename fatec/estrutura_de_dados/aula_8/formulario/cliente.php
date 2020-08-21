<?php

// Construir formulário
  // campo NOME
  // campo EMAIL
  // campo SALÁRIO
  // campo TELEFONE

// Validar o formulário
  // Todos os campos seja obrigatórios
  // Validar e-mail se possui @
  // Validar o salário, se > 0
  // Validar telefone, se possui mais de 8 números

// Se for validado, gravar em arquivo .txt, os dados enviados
// formato do arquivo 
// CODIGO | NOME | EMAIL | SALÁRIO | FONE
// CÓDIGO formatado com 6 dígitos, 0 à esquerda
// CÓDIGO INCREMENTAL, A PARTIR DA QUANTIDADE DE LINHA
// 000001 | WILLIAM | email@emai.com | 1500 | 1199999999
// 000002 | JOÃO | email@emai.com | 1500 | 1199999999
// 000003 | PEDRO | email@emai.com | 1500 | 1199999999
// 000004 | MARIA | email@emai.com | 1500 | 1199999999
// 000010 | LUANA | email@emai.com | 1500 | 1199999999
// 000100 | GUSTAVO | email@emai.com | 1500 | 1199999999

// zeras à esquerda
//  echo str_pad($string, 5, '0', STR_PAD_LEFT) 

// Verifica se campo está vazio
$nome = (isset($_POST['nome']))?$_POST['nome']: '';
$email = (isset($_POST['email']))?$_POST['email']: '';
$salario = (isset($_POST['salario']))?$_POST['salario']: '';
$telefone = (isset($_POST['telefone']))?$_POST['telefone']: '';
$mensagemErro = '';


if (($nome == '') || ($email == '') || ($salario == '') || ($telefone == '')) :
  echo "Preencher todos os campos";
  exit;
endif;

if(strpos($email, '@') === false):
  $mensagemErro .= "Preencher com Email válido\n";
endif;

if ($salario <= 0):
  $mensagemErro .= "Salário deve ser maior que 0 \n";
endif;

if (strlen($telefone) < 8):
  $mensagemErro .= "Telefone deve ter 8 dígitos \n";
endif;

if ($mensagemErro === ''){
  // $file = fopen('clientes.txt', 'a+');
  // $linhas = count(file("clientes.txt"));
	// fwrite($file, str_pad($linhas, 6, '0', STR_PAD_LEFT) . " | $nome | $email | $salario | 11 $telefone" . PHP_EOL);	
  // fclose($file);
  
  /* outra forma:*/
  $file = fopen('clientes.txt', 'a+');
  $linhaAtual = 0;
  // Enquanto não for final do arquivo não for o fim do arquivo
  while(!feof($file)):
    $linha = fgets($file, 1024); //Lê a linha atual, 1024 é o tamanho da linha... normalmente
    $linhaAtual++;
  endwhile;
  fwrite($file, str_pad($linhaAtual, 6, '0', STR_PAD_LEFT) . " | $nome | $email | $salario | 11 $telefone" . PHP_EOL);	
  fclose($file);
}
else{
	echo $mensagemErro;
}