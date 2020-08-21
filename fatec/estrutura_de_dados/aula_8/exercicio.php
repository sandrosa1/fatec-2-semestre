<?php
/* 
$file = fopen("carol.txt", 'a+');

$nome = 'Carolina';
for($i = 0; $i < 1000; $i++){
  fwrite($file, $i .' - '. $nome . PHP_EOL);
}
fclose($file); */



// Escrever arquivo com números de 1 a 100
// Ler arquivo e exibir em tela, somente números pares multiplicados por 2

// Cria arquivo e permite escrita
$file = fopen('multiplo2.txt', 'a+');
for($i = 1; $i <= 100; $i++):
  fwrite($file, $i . PHP_EOL);
endfor;
// Fecha arquivo;
fclose($file);


// Lê arquivos
$file = fopen('multiplo2.txt', 'r');
// Exibe em tela e multiplica
while(!feof($file)):
  $linha = fgets($file, 1024);
  if((int)$linha%2 === 0):
    echo ('Leitura -> ' . $linha . ' *2 = ' .  (int)$linha * 2 . '<br>');
  endif;
endwhile;

// Fecha arquivo;
fclose($file);

