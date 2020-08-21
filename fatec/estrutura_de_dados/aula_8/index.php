<?php

// PARA ESCREVER
// 1 - Cria arquivo
// 2 - Escreve no arquivo
// 3 - Fecha o arquivo

// $file = fopen('log.txt', 'a+');
// $nome = 'Carol';
// fwrite($file, $nome /*'AULA ESTRUTURA DE DADOS 1'*/ . PHP_EOL);
// fwrite($file, $nome /*'AULA ESTRUTURA DE DADOS 2'*/ . PHP_EOL);

// fclose($file);
// ---------------------------
// PARA LER
// 1 - Carregar o arquivo em memória
// 2 - Percorrer todas as linhas do arquivo (while)
// 3 - Ler a linha atual
// 4 - Fechar o arquivo

$file = fopen('log.txt', 'r');

// Enquanto não for final do arquivo !feof
while(!feof($file)):
  $linha = fgets($file, 1024); //Lê a linha atual, 1024 é o tamanho da linha... normalmente
  echo 'Leitura ->' . $linha;
endwhile;
fclose($file);