<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTÃO 13 - ARRAY DE NUMEROS</title>
</head>
<body>
    
    <h1>Array de Números</h1>

   <form method="GET">
   <label for="numeros">Informe os números separados por vírgula</label>
   <input type="text" id="numeros" name="numeros" required>
   <br>

   <input type="submit" value="Enviar">

    </form>

   <?php

        if(isset($_GET["numeros"])){
            $numeros = $_GET["numeros"];
            $arrayNumeros = explode(",", $numeros);
            $arrayNumeros = array_map('trim', $arrayNumeros);
         
           $soma = array_sum($arrayNumeros);
           $maior = max($arrayNumeros);
           $menor = min($arrayNumeros);

            echo "<p>Soma: $soma</p>";
            echo "<p>Maior: $maior</p>";
            echo "<p>Menor: $menor</p>";
           
        }

    ?>

</body>
</html>