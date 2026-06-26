<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>


    <form method="POST">

        <label for="">Usuário</label>
        <input type="text" id="inputUsuario" name="usuario">
        <br>

        <label for="inputSenha">Senha</label>
        <input type="password" id="inputSenha" name="senha">
        <br>

        <input type="submit" value="Entrar">  
        
        <?php

            session_start();
            
            $validUsername = "admin";
            $validPassword = "1234";

            if(isset($_POST["usuario"], $_POST["senha"])){
                $usuario = $_POST["usuario"];
                $senha = $_POST["senha"];

                if($usuario == $validUsername && $senha == $validPassword){
                    $_SESSION['loggedin'] = true;
                    echo "<p>Login bem-sucedido! Bem vindo, $usuario</p>";
                    echo '<form method="post" action=""><button type="submit"> Sair</button></form>';
                
                } else{
                    echo "Usuário ou senha inválidos!";
                }

            }
        ?>



    


    </form>
</body>
</html>