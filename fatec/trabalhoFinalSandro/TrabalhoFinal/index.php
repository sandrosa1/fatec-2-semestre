<?php include 'include/nossosLinksTop.php';?>

<div class="container container-fluid">
    <div class="row">
        <div class="col-md-6 divs">
        <br><hr>
        <h1 class=" text-center">Cadastro de Funcionários</h1>
    <br><hr>

            <form action="TrabLeitura.php" method="POST">
                <label>NOME:</label><br>
                <input type="text" name="nome"><br><br>
                <p>Informe o Genero</p>
                <input type="radio" id="male" name="sexo" value="Masculino">
                <label for="male">Masculino</label><br>
                <input type="radio" id="female" name="sexo" value="Feminino">
                <label for="female">Feminino</label><br>
                <p>Informe o sua Função</p>
                <input type="radio" id="male" name="funcao" value="Gerencia">
                <label for="male">Gerencia</label><br>
                <input type="radio" id="female" name="funcao" value="Funcionario">
                <label for="female">Funcionário</label><br>
                <label>SALÁRIO:</label><br>
                <input type="text" name="salario"><br><br>
                <button>Cadastrar</button>
            </form>
        </div>
        <div class="col-md-6 divs">
        <br><hr>
            <h1 class=" text-center">Quadro de Funcionário</h1>
    <br><hr>
    <form action="TrabTabela.php" method="POST">
    <br>

        <input type="radio" id="geral" name="TipoCelula" value="Geral">
        <label for="Geral">Geral</label><br>
        <br>

        <input type="radio" id="empfem" name="TipoCelula" value="Feminino">
        <label for="EmpFem">Feminino</label><br>
        <br>

        <input type="radio" id="empmasc" name="TipoCelula" value="Masculino">
        <label for="EmpMasc">Masculino</label><br>
        <br>
        <input type="radio" id="empger" name="TipoCelula" value="Gerencia">
        <label for="EmpGer">Gerentes</label><br>
        <br>
        <input type="radio" id="empfunc" name="TipoCelula" value="Funcionario">
        <label for="EmpFunc">Funcionários</label><br>
        <br>
        <button>Pesquisar</button>
    </form>
    </div>
    </div>

    <? include 'include/nossosLinksBotom.php'?>