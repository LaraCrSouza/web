<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTÃO 6</title>
</head>
<body>
    
    <form method="GET">

        <label for="inputN">Informe um valor</label>
        <input type="text" id="inputN" name="n"  value="<?php if(isset($_GET["n"])){echo $_GET["n"];}?>
        ">

        <input type="submit" value="Enviar">

    </form>

    <div>
        <?php

            if (!isset($_GET["n"])){
                exit();
            } 
            if (trim($_GET["n"])==""){
                exit();
            }

            $numero=$_GET["n"];

           
            if($numero%2==0){
                echo "O numero". $numero. "é par";
            } else{
                echo "O numero". $numero. "é impar";
            }

        ?>
    </div>
</body>
</html>