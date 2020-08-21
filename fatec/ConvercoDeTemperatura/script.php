<?php


$celsius = $_POST['celsius'];
$fahrenhenit = $_POST['fahrenhenit'];
$kelvin = $_POST['kelvin'];

if($celsius)
{
    tempCelsius($celsius);
    echo $resp;
}

if($fahrenhenit)
{
    tempFahrenhenit($fahrenhenit);
}

if($kelvin)
{
    tempKelvin($kelvin);
}

function tempCelsius($celsius)
{
        
        $resultado1 = ($celsius * (9/5)) + 32; 
        $resultado2 = $celsius + 273.15;

        $resp[]= $resultado1;
        $resp[]= $resultado2;
        return $resp;
    
}

function tempFahrenhenit($fahrenhenit)
{

        $resultado3 = ($fahrenhenit- 32) * 5/9;
        $resultado2 = ($fahrenhenit- 32) * 5/9 + 273.15;

        $resp[]= $resultado3;
        $resp[]= $resultado2;
        return $resp;
}

function tempKelvin($kelvin)
{
    
        $resultado3 = $kelvin - 273.15;
        $resultado1 = ($kelvin - 273.15) * 9/5 + 32;

        $resp[]= $resultado3;
        $resp[]= $resultado1;
        return $resp;

        
    
}
