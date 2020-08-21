<?php
date_default_timezone_set('America/Sao_paulo');



$dataAtual =date('Y-m-d');

$dataAniversario = '1976/03/15';

$dayWeek = date('N', strtotime($dataAniversario))."<hr>";
echo $dayWeek;


switch($dayWeek){
    case 1: echo 'Você Nasceu em uma Segunda Feira <hr>'; 
    break;
    case 2: echo 'Você Nasceu em uma Terça Feira <hr>'; 
    break;
    case 3: echo 'Você Nasceu em uma Quarta Feira <hr>'; 
    break;
    case 4: echo 'Você Nasceu em uma Quinta Feira <hr>'; 
    break;
    case 5: echo 'Você Nasceu em uma Sexta <hr>'; 
    break;
    case 6: echo 'Você Nasceu em uma sabado <hr>'; 
    break;
    case 7: echo'Você Nasceu em uma Domingo <hr>'; 
    break;
    default: echo 'Erro não esperado'; 
}

$mesAni = date('n', strtotime($dataAniversario))."<hr>";

function RetornaMes($mes)
{ 
    switch($mes){
        case 01: echo 'Janeiro <hr>'; 
        break;
        case 02: echo 'Fevereiro <hr>'; 
        break;
        case 03: echo ' Março <hr>'; 
        break;
        case 04: echo ' Abril <hr>'; 
        break;
        case 05: echo ' Maio <hr>'; 
        break;
        case 06: echo 'Junho <hr>'; 
        break;
        case 07: echo 'Julho<hr>'; 
        break;
        case 8: echo ' Agosto <hr>'; 
        break;
        case 9: echo' Setembro <hr>'; 
        break;
        case 10: echo' Outubro <hr>'; 
        break;
        case 11: echo' Novembro<hr>'; 
        break;
        case 12: echo' Dezembro<hr>'; 
        break;
        default: echo 'Erro não esperado'; 
    }
    

}



for ($i=15; $i <= 60 ; $i+=15) { 
    echo date ('d/m/Y', strtotime('+'. $i . 'days', strtotime('today'))) . '<BR>';}

    $janeiro=  "01";
    $mesAtual = date('m');

for ($i = $janeiro; $i <= $mesAtual; $i++)
{
    RetornaMes($i);

}





// echo date('d/m/Y H:i:s')."<hr>";


 //[] argumento opicional

// $data= '2019/01/01';

// //echo strtotime($data);

// echo date('d/m/Y', strtotime($data))."<hr>";

// echo date('d/m/Y H:i:s:', strtotime($data))."<hr>";


// echo date('d/m/Y',strtotime('+30 day',strtotime($data)))."<hr>";

// echo date('Y/m/d',strtotime('+30 Years 10 days',strtotime($data)))."<hr>";

// echo date('n', strtotime($data))."<hr>";

// echo date('j', strtotime($data))."<hr>";