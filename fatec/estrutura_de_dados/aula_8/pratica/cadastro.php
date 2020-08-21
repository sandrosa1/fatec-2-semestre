<?php


$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$idade = (isset($_POST['idade'])) ? $_POST['idade'] : '';
$telefone = (isset($_POST['telefone'])) ? $_POST

if($_POST['sexo'] === 'feminino'):
  $sexo = 'feminino';
elseif($_POST['sexo'] === 'masculino'):
  $sexo = 'masculino';
else:
  $sexo = '';
endif;

if ($nome == '' || $idade == '' || $sexo == ''):
  echo 'Digite todos os campos';
  exit;
endif;

if($idade >= 18 && $sexo === 'masculino'){
  $reservista = 'Reservista OK';
} elseif ($idade <18 && $sexo === 'masculino'){
  $reservista = 'Alistamento';
} elseif($sexo === 'feminino'){
  $reservista = 'N/A';
}

// Abrir ou criar arquivo
$file = fopen('cadastro.txt', 'a+');
$linhaAtual = 0;
// Enquanto não for final do arquivo não for o fim do arquivo
while(!feof($file)):
  $linha = fgets($file, 1024); //Lê a linha atual, 1024 é o tamanho da linha... normalmente
  $linhaAtual++;
endwhile;
fwrite($file, str_pad($linhaAtual, 6, '0', STR_PAD_LEFT) . " | $nome | $idade | $sexo | $reservista" . PHP_EOL) ;
fclose($file);


