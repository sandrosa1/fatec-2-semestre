<?php


// if(file_exists('log.txt'))
// {
//     $arrayCliente = [];

//     // Lê o arquivo
//     $file = fopen('log.txt', 'r');
//     $arrayCliente[] = file('log.txt');
//     fclose($file);


//     foreach ($arrayCliente as $dados)
//     {
//         foreach($dados as $individual)
//         {
//         $arrayIndividual[] = explode('|', $individual);
//         }
//     }
//     echo "<table border='1'><tr>"; 
//     foreach($arrayIndividual as $value)
//     {
//         echo"<tr>";
//         foreach($value as $innerValue)
//         {
//                 echo("<td>$innerValue</td>");
//         }
//         echo"</tr>";
//     };
//     echo "</table>";
// }
// else
// {
//     echo 'Nenhun dado disponivel';
// }
//  


if (file_exists('log.txt')) 
{
    $arrayCliente = [];
    $arrayCliente[] = file('log.txt');

  // A partir da $arrayCliente, acessa-se os dados externos(cada conjunto de inserção), e acessa cada item cadastrado. Adiciona cada item em uma nova array $arrayIndividual.
    foreach ($arrayCliente as $dados)
    {
        foreach ($dados as $individual) 
        {
        $arrayIndividual[] = explode('|', $individual); 
        }
    }
    // Retirar a primeira inserção, que é o cabeçalho
    $arrayCabecalho = array_shift($arrayIndividual);

      // A partir da $arrayIndividual criada, acessa-se os itens, criando as linhas e acessando os subitens, cria-se as colunas de dados
    echo "<table border='1'><thead>";
    foreach ($arrayCabecalho as $cabecalho) 
    {
        echo "<th>$cabecalho</th>";
    }
    foreach ($arrayIndividual as $value) {
    echo "<tr>";
    foreach ($value as $innerValue)
    {
        echo "<td>$innerValue</td>";
    }
    echo "</tr>";
    };
    echo "</table>";
}
else
{
    echo 'Nenhun dado disponivel';
}