<?php
$cores = ["Azul", "Vermelho", "Verde", "Preto", "Branco"];
$paises = [
    "paises" => [
        "Brasil",
        "Argentina",
        "Uruguai"
    ]
]; 
$estados = 
[
    [
        "Estados" => "Sao Paulo",
        "cidades" => [
            "Sao Roque",
            "Mairinque",
            "Aluminio",
            "Sorocaba",
            "Aracoiaba"
        ]
    ],
    [
        "Estados" => "Rio de Janeiro",
        "cidades" => [
            "Copacabana",
            "Niteroi",
            "Realengo",
            "Sao Goncalo",
            "Madureira"
        ]
    ],
    [
        "Estados" => "Parana",
        "cidades" => [
            "Cascavel",
            "Curitiba",
            "Toledo",
            "Londrina",
            "Maringa"
        ]
    ]
];

$jsonCores = json_encode($cores);

if(!file_exists('cores.json'))
{
    $file = fopen('cores.json', 'a+');
    fwrite($file, $jsonCores);
    fclose($file);
}

$jsonPais = json_encode($paises);

if(!file_exists('paises.json'))
{
    $file = fopen('paises.json', 'a+');
    fwrite($file, $jsonPais);
    fclose($file);
}

$jsonEstados = json_encode($estados);
if(!file_exists('estados.json'))
{
    $file = fopen('estados.json', 'a+');
    fwrite($file, $jsonEstados);
    fclose($file);
}


echo "GRAVE E LEIA 5 CORES EM JSON<br>";
$json = file_get_contents('cores.json');
$arrayCores = json_decode($json);

foreach($arrayCores as $cores){
    echo "{$cores}<br>";
}
echo "<hr>";

echo "3 PAISES DA AMERICA LATINA EM JSON<br>";
$json = file_get_contents('paises.json');
$arrayPaises = json_decode($json);

foreach($arrayPaises->paises as $paises){
    echo "{$paises}<br>";
}
echo "<hr>";

echo "3 ESTADOS COM 5 CIDADES CADA EM JSON<br>";
$json = file_get_contents('estados.json');
$arrayEstado = json_decode($json);

foreach($arrayEstado as $estado){
    echo "{$estado->Estados} <br>";
    foreach($estado->cidades as $cidades){
        echo"***{$cidades} <br>";
    }
}
echo "<hr>";    

