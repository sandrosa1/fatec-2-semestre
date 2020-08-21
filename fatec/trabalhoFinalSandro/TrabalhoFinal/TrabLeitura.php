<?php include 'include/nossosLinksTop.php';?>

<div class=" container-fluid">

    <div class=" col-10 offset-1">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<?php
date_default_timezone_set('America/Sao_paulo');
    
// recebe os valores via post
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
$funcao = (isset($_POST['funcao'])) ? $_POST['funcao'] : '';
$salario = (isset($_POST['salario'])) ? $_POST['salario'] : '';
    //cria vairiavel mensagem se erro
$mensagemErro = '';
    //valida se todos os campos foram preenchidos
if($nome == '' || $salario == '' || $sexo =='' || $funcao == '')
{
    echo '<br><br><h4>ERROR: É necessário preencher todos os campos!</h4><br><br><hr>';?>

    <a href = "index.php">Voltar</a>
<?php
exit;
}

//valida se o salario e maior que Zero
if($salario <= 0)
{
    $mensagemErro = '<h4>ERROR: Salario deve ser maior que zero!</h4><br><hr>';
}
//valida o numero de caracteres
if(strlen($nome) > 50)
{
    $mensagemErro .= "<h4>ERROR: Número de carácteres excedido;</h4><br><hr>";
}

//calcula o INSS
$inss = ($salario*11)/100;
//Pega data e hora do cadrastro
$data = date('d/m/y H:i:s');
// Pega somente os dois ultimos digitos do ano
$ano = date('y');

//Verifica se Não há msg de erro
if($mensagemErro === '')
{
    //Declara a variavel contadorLinha
    $contadorLinha = 0;

    //verifica se o  arquivo dadosTrab.txt existe
    if(file_exists('dadosTrab.txt'))
    {
        //se existir abre o arquivo e Leia
        $file = fopen('dadosTrab.txt', 'r');

        //enquanto não chegar ao fim do arquivo faça
        while(!feof($file))
        {
            //Recebe o conteudo da linha
            $recebeLinha = fgets($file, 1024);

            //adiciona um ao contador
            $contadorLinha++;
        }
            //Fecha o arquivo
            fclose($file);
            //decrementa o contador
            $contadorLinha--;
        
    }
    // abre ou cria o arquivo para escrever
    $file = fopen('dadosTrab.txt', 'a+');
    //Se nao existir nada faça o cabeçalho
    if($contadorLinha === 0)
    {
        //escreve o cabeçalho
        fwrite($file, 'CODIGO | NOME | FUNÇÃO | SEXO | SALÁRIO | INSS | DATA_CADASTRO'.PHP_EOL);
        $contadorLinha++;
    }
    // Variavel codigo recebe o contadorLinha com quatro casas preenchidas com zero a esquerda
    $codigo = str_pad($contadorLinha, 4, '0', STR_PAD_LEFT);
    //varavel linha recebe todas variaveis com os dados e PHP_EOL declara o fim da linha
    $linha = "$codigo$ano | $nome | $funcao | $sexo | $salario | $inss | $data".PHP_EOL;
    //escreve no arquivo o conteudo da variavel linha
    fwrite($file, $linha);
    // fecha o arquivo
    fclose($file);

    echo '<hr><h2>Cadastro concluido com sucesso!</h2><hr><br><br><br><br><br><br>';
    echo "<a href='index.php'Voltar<\a>";
}


    echo $mensagemErro ;
?>


<a href = "index.php" >Voltar</a>

<? include 'include/nossosLinksBotom.php'?>
</div>
</div>