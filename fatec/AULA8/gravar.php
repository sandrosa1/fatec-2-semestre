<?php


$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$email = (isset($_POST['email'])) ? $_POST['email']: '';
$salario = (isset ($_POST['salario'])) ? $_POST['salario'] : '';
$telefone = (isset ($_POST['telefone'])) ? $_POST['telefone'] : '';
$msgErro = '';


if (($nome == '') or ($email == '') or ($salario == '') or ($telefone == '')){
	$msgErro ="Preencher todos os campos.";
	exit;	
}
if(strpos($email, '@') === false)
{
    $msgErro = 'E-mail invalido!<br>';
}
if($salario > 0)
{
    $msgErro .= "Salario Insuficiente!<br>";
}

if(strlen($fone) < 8)
{
    $msgErro .= "Telefone invalido";
}

if($msgErro == '')
{

    $contadorLinha = 0;
    if(file_exists('dados.txt'))
    {

        $file = fopen('dados.txt','r');
        while(!feof(($file)))
        {
            $temp = fgets($file, 1025);
            $contadorLinha++;

        }

        fclose($file);
    }

    $file = fopen('dados.txt','a+');
    if($contadorLinha)
    
}

