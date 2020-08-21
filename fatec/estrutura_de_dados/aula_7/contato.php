<?php

$nome = (isset($POST['nome'])) ? $_POST['nome'] : '';  //Condição ternária. Se existir valor no input nome, então atribui o nome para $nome. Caso não exista, preenche com vampo vazio, ''
$fone = (isset($POST['fone'])) ? $_POST['fone'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';

echo $nome, ' ' , $fone, ' ', $email;