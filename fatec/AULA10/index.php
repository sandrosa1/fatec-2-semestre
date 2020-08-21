<?php

// //JSON
// $pessoa1 =[
//     [
//         "nome" => "sandro",
//         "salario"=> 20.00,
//         "profissao" => "retificador",
//         "conhecimentos"=> [
//             "php",
//             "java",
//             "python"
//         ]
//     ],
//     [
//         "nome" => "joao",
//         "salario"=> 25.00,
//         "profissao" => "student",
//         "conhecimentos"=> [
//             "php",
//             "java",
//             "python",
//             "c#"
//         ]
//     ]
// ];

// $json = json_encode($pessoa1);

// echo $json;


/////////

// $json = file_get_contents('pessoas.json');

// $arrayPessoas = json_decode($json);

// foreach($arrayPessoas as $pessoas)
// {
//     echo $pessoas ->nome . '-' . $pessoas->salario . '<br>';

//     foreach( $pessoas->conhecimentos as $liguagem)
//     {
//         echo "**{$liguagem}<br>";
//     }



// }


$json = file_get_contents('pessoas.json');

$arrayPessoas = json_decode($json);

foreach($arrayPessoas->pessoas as $pessoas)
{
    echo $pessoas ->nome . '-' . $pessoas->idade  . '<br>';

    foreach( $pessoas->conhecimentos as $liguagem)
    {
        echo "**{$liguagem}<br>";
    }



}