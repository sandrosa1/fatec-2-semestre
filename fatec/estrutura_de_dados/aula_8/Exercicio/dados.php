<?php
  
  $file = fopen('log.txt', 'r');
  $linhaAtual = 0;
  while(!feof($file)):
    $linha = fgets($file, 1024); //Lê a linha atual, 1024 é o tamanho da linha... normalmente
    $linhaAtual++;
  endwhile;
  fclose($file);
  
  $cabecalho = "CÓDIGO | NOME | EMAIL | SALARIO | TELEFONE";
  $arrayCabecalho = explode('|', $cabecalho);
  $arrayCadastros = file('log.txt');
  // var_dump($arrayCadastros);

?>

<table border="1">
    <thead>
      <th><?=$arrayCabecalho[0]?></th>
      <th><?=$arrayCabecalho[1]?></th>
      <th><?=$arrayCabecalho[2]?></th>
      <th><?=$arrayCabecalho[3]?></th>
      <th><?=$arrayCabecalho[4]?></th>
    </thead>
    <tbody>
      <tr>
       <?php $i=6; while($i<12): ?>
        <td><?= $arrayCadastros[$i]?></td>
       <?php $i++; endwhile; ?>
      </tr>
    </tbody>
  </table>
