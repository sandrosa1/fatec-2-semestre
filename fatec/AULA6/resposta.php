<?php

$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$email = (isset($_POST['email'])) ? $_POST['email']: '';
$salario = (isset ($_POST['salario'])) ? $_POST['salario'] : '';
$telefone = (isset ($_POST['telefone'])) ? $_POST['telefone'] : '';
$mensagemErro = '';


if (($nome == '') or ($email == '') or ($salario == '') or ($telefone == '')){
	echo "Preencher todos os campos.";
	exit;	
	}

if (strpos($email, '@') === false) {
	$mensagemErro = "Email Inválido!<BR>";
}

if ($salario <= 0) {
	$mensagemErro .= "Salário deverá ser maior que zero!<BR>";
}

if (strlen($telefone) < 8) {
	$mensagemErro .= "Telefone deverá ter mais de 8 caracteres!<BR>";
}
if(!is_numeric($telefone)){
	$mensagemErro .= "Telefone não pode conter caracteres<br>";
}

if(!file_exists('log.txt'))
{
	$file = fopen('log.txt', 'a+');
	fwrite($file, 'CODIGO | NOME | EMAIL | SALARIO | TELEFONE'. PHP_EOL);
	fclose($file);
}

	if ($mensagemErro === '')
	{	
		$file = fopen('log.txt', 'a+');
		$linhaAtual = -1;
		while(!feof($file)):
			$linha = fgets($file, 1024); //Lê a linha atual, 1024 é o tamanho da linha... normalmente
			$linhaAtual++;
		endwhile;
		fwrite($file, str_pad($linhaAtual, 6, '0', STR_PAD_LEFT) . " | $nome | $email | $salario | 11 $telefone" . PHP_EOL);	
		fclose($file);	
		echo "Cadastro realizado com sucesso!";
	}
	else
	{
		echo $mensagemErro;
	}