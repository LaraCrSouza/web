<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTÃO 11 - INTERVALO</title>
</head>
<body>

  <h1>INFORME DOIS VALORES</h1>


  <?php
    session_start();
    if(isset($_SESSION["a"]) && isset($_SESSION["b"])){
        echo "<p>Intervalo salvo na sessão: {$_SESSION["a"]}  a  {$_SESSION["b"]}</p>";
    }
    ?>

     <form method="get" action="siteIntervalo.php">

        <label for="">Informe o primeiro número</label>
        <input type="number" id="a" name="a">
        <br>

        <label for="">Informe o segundo número</label>
        <input type="number" id="b" name="b">
        <br>

        <input type="submit" value="Enviar">

    </form>

    <?php
        if (isset($_GET["a"]) && isset($_GET["b"])){
            $_SESSION["a"] = $_GET["a"];
            $_SESSION["b"] = $_GET["b"];
            echo "<p>Intervalo salvo na sessão: {$_SESSION["a"]}  a  {$_SESSION["b"]}</p>";
        }
    ?>
</body>
</html>