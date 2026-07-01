<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9 - Formulário</title>
</head>
<body>

      <form method="GET">

      <label for="inputS">Escreva alguma coisa</label>
      <input type="text" id="inputS" name="texto"  value="">

      <button type="submit">Calcular</button>

      <div class="container">

        <?php

            if (!isset($_GET["texto"])){
                exit();
            } 

            if (trim($_GET["texto"])==""){
                exit();
            }

            $texto=$_GET["texto"];

            $tam=mb_strlen(trim($texto));
            echo "Tamanho da palavra: $tam <br>";

            $strIn=strrev(trim($texto));
            if($strIn == $texto){
                echo "É palíndromo <br>";
            } else{
                echo "Não é palíndromo <br>";
            };

            $palavraM = strtoupper($texto);
            $letras = str_split($palavraM);
            $vogais = 0;
            $consoantes = 0;
            $totalLetras = count($letras);

            for($i = 0; $i<$totalLetras; $i++){
                if($letras[$i]  == "A" || $letras[$i]  == "E" || $letras[$i]  == "I" || $letras[$i]  == "O" || $letras[$i]  == "U"){
                    $vogais++;
                } else{
                    $consoantes++;
                }
            }

            echo "Número de vogais: $vogais <br>";
            echo "Número de consoantes: $consoantes <br>";

            

        ?>
    </div>

</body>
</html>