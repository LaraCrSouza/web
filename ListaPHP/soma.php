<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTÃO 8</title>
</head>
<body>
    <form method="GET">

    <label for="inputN">Informe um valor</label>
    <input type="text" id="inputN" name="num"  value="<?php if(isset($_GET["num"])){echo $_GET["num"];}?>
    ">

    <input type="submit" value="Somar">
    </form>

    <?php

    if (!isset($_GET["num"])){
        exit("Parâmetro num não enviado");
    } 
    $num = $_GET["num"];
    function soma($numArray){
        $soma = 0;
        for($i = 0; $i <count($numArray); $i++){
            $soma += (int) $numArray[$i];
        }
        return $soma;
    }
   
    $valores = explode(",", $num);
    $resultado = soma($valores);
    echo $resultado;
    ?>
</body>
</html>