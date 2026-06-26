<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTÃO 12 - TRIÂNGULO</title>
</head>
<body>
    
<form method="GET">

        <h1>INFORME TRÊS VALORES</h1>

        <label for="inputA">Valor 1</label>
        <input type="text" id="a" name="a">
        <br>

        <label for="inputB">Valor 2</label>
        <input type="text" id="b" name="b">
        <br>

        <label for="inputC">Valor 3</label>
        <input type="text" id="c" name="c">
        <br>

        <input type="submit" value="Enviar">

        <?php

            $a = (float)$_GET["a"];
            $b = (float)$_GET["b"]; 
            $c = (float)$_GET["c"];

            if(($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a){

                if($a == $b && $b == $c){
                    echo "É um triângulo equilátero";
                } else if($a == $b || $a == $c || $b == $c){
                    echo "É um triângulo isósceles";
                } else{
                    echo "É um triângulo escaleno";
                }
            } else{
                echo "Não é um triângulo";
            }

        ?>

</body>
</html>