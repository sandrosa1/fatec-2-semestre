<?php

include "servicos/calculo.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converçor de temperatura</title>
</head>
<body>

    <h1>Conversor de Temperaturas</h1>
        <form action="script.php" method="POST" >
        <input type="text" name="celsius" placeholder="Celsius" ><br><br>
        <input type="text" name="fahrenhenit" placeholder="Fahrenhenit"><br><br>
        <input type="text" name="kelvin" placeholder="Kelvin" ><br><br>
        <button>Gravar</button>
    </form>

</body>
</html>