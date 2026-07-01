<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTÃO 10 - PÁGINA 1</title>

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
    
<!--Formulário para entrada de nome e email enviado por GET para siteIMC2.php-->

    <form method="GET" action="siteIMC2.php">

        <h1>Cadastro</h1>

        <label for="inputNome">Informe seu nome</label>
        <input type="text" id="inputNome" name="nome">
        <br>

        <label for="inputEmail">Informe seu email</label>
        <input type="text" id="inputEmail" name="email">
        <br>

        <input type="submit" value="Enviar">


    </form>


</body>
</html>