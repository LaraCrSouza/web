<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="GET">

        <label for="inputN">Informe um valor</label>
        <input type="text" id="inputN" name="n"  value="<?php if(isset($_GET["n"])){echo $_GET["n"];}?>
        ">

        <input type="submit" value="Enviar">
    </form>

    <?php

        if (!isset($_GET["n"])){
            exit();
        } 
        if (trim($_GET["n"])==""){
            exit();
        }

        $numero=$_GET["n"];

        for($i = 0; $i<=10; $i++){
            echo $numero. " x " .$i." = ".$numero*$i . "<br>";
        }

    ?>

</body>
</html>