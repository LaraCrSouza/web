<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTÃO 10 - PÁGINA 2</title>

    <style>
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    
    <?php
        IF(isset($_GET["nome"]) && isset($_GET["email"])){
            $nome = $_GET["nome"];
            $email = $_GET["email"];
            echo "<p>Nome: " . $nome . "</p>";
            echo "<p>Email: " . $email . "</p>";
        } else{
            header("Location: siteIMC.php?error=error");
        }
    ?>

     <form method="POST" action="siteIMC3.php">

     <input type="hidden" name="nome" value="<?php echo $nome; ?>">
     <input type="hidden" name="email" value="<?php echo $email; ?>">

        <label for="">Informe seu peso</label>
        <input type="number" step="0.01" id="inputPeso" name="peso">
        <br>

        <label for="">Informe sua altura</label>
        <input type="number" step="0.01" id="inputAltura" name="altura">
        <br>

        <input type="submit" value="Enviar">


    </form>

    

</body>
</html>