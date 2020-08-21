<?php include 'include/nossosLinksTop.php';?>
<div class=" container-fluid">

    <div class=" col-10 offset-1 ">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<?php

//verifica não existe o arquivo e gera uma msg
    if(!file_exists('dadosTrab.txt'))
    {
        echo '<h4>Error: Ainda não existe dados cadastrados!</h4><br><hr><br>';
        
        ?><a href = "index.php">Voltar</a><?php
        exit;
    }

    //Declara a variavel valor que recebe a posiçao dos intens do cadrastro
    $valor = 0;

    // tipoCelula determina qual celula vai ser verificada

    $tipoCelula = (isset($_POST["TipoCelula"])) ? $_POST["TipoCelula"] : '';
    //se não existir celula gera msg
    if($tipoCelula == '')
    {
    echo '<h3>É necessário selecionar uma tabela</h3>';

        ?>
        <a href = "index.php">Voltar</a>
        <?php
        exit;
    }

    //se celula for igual a Geral imprimi um tabela com todo o conteudo
    if($tipoCelula == 'Geral') $tipoCelula = '';
    else
        // se celula for feminino ou masculina recebera posição 3 os demais recebem 2
        if($tipoCelula == 'Feminino' || $tipoCelula == 'Masculino')
    {
        $valor = 3;
    }
    else $valor = 2;
    //Chama a função geraTabela passando o tipo da celula e seu valor ser imprimido
    GeraTabela($tipoCelula, $valor);

// função para gerar as tabelas
function GeraTabela($tipoPessoa, int $valor)
{
    //Cria um cabeçalho fixo
?>
<div class="table-responsive">
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>CÓDIGO</th>
                    <th>NOME</th>
                    <th>CARGO</th>
                    <th>GENERO</th>
                    <th>SALARIO</th>
                    <th>INSS</th>
                    <th>DATA</th>
                </tr>
            </thead>
        <tbody>
<?php  
//abre le o arquivo e armazena na variavel file
        $file = fopen('dadosTrab.txt', 'r');
        // Enquanto for diferente fim do arquivo
        while(!feof($file))
        {
            //Linha recebe a linha do arquivo
            $linha = fgets($file, 1024);
            // a linha sera separada sempre que encontrado o caracter "|" e armazenado na variavel vetor gerando um array da linha 
            $Vetor = explode(' | ', $linha);
            // se tipoPessoa for vazio imprimi toda tabela
            if($tipoPessoa == '')
            {
                //se for diferente de codigo e linha vazia e enter(fim da linha) chama fução corpo da tabela
                if (trim($Vetor[0]) != 'CODIGO' && $linha != '' && $linha != '\n')
                {
                    CorpoTabela($Vetor);
                }
            }
    
            else   // se tipoPessoa tiver conteudo
            {
                if(trim($Vetor[0]) != 'CODIGO' && $linha != '' && $linha != '\n')
                {
                    // se tipo pessoa for igual ao valor chama função corpo tabela com a linha verificada
                    if(trim($Vetor[$valor]) == $tipoPessoa)
                    {
                        CorpoTabela($Vetor);
                    }
                }
            }
        }
        
        echo '</tbody> </table> </div>';
}

// Funçao corpo tabela recebe o vetor 
    function CorpoTabela($Vetor)
    {
        echo '<tr scope="row">';
        // para cada celula de 0 a 6 imprima o conteudo das celulas
        for($i=0; $i<7; $i++)
        { 
            echo "<td>{$Vetor[$i]}</td>";
        }
        echo '</tr>';
    }

?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

<a href = "index.php" >Voltar</a>
</div>


<? include 'include/nossosLinksBotom.php'?>