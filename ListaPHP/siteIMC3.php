<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    

    <h1>RESULTADO</h1>

    <?php

        if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["peso"]) && isset($_POST["altura"])){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];

            $imc = $peso / ($altura * $altura);

            echo "Nome: " . $nome . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Peso: " . $peso . "<br>";
            echo "Altura: " . $altura . "<br>";
            echo "IMC: " . number_format($imc, 2) . "<br>";

        }
           
    ?>


</body>
</html>