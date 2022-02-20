<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);

        include_once('DAO/MySQL.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email) 
        VALUES ('$nome','$senha','$email')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teen Cash</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(5, 199, 0), rgb(4, 133, 1));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid white;
        }
        legend{
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            background-color: darkgreen;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: lightgreen;
        }
        
        #submit{
            background-image: linear-gradient(to right, rgb(5, 199, 0), rgb(4, 133, 1));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: green;
        }
    </style>
</head>
<body>
    <a href="index.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de cadastro</b></legend>
                <br>
                <div class="inputBox">
                <input name="nome" class="inputUser" value="<?= isset($dados_usuario) ? $dados_usuario->nome : "" ?>" type="text" required />
                    <label for="nome" class="labelInput">Nome: </label>
                </div>
                <br>
                <div class="inputBox">
                <input name="senha" class="inputUser" value="<?= isset($dados_usuario) ? $dados_usuario->senha : "" ?>" type="password" required />
                    <label for="senha" class="labelInput">Senha: </label>
                </div>
                <br><br>
                <div class="inputBox">
                        <input name="email" class="inputUser" value="<?= isset($dados_usuario) ? $dados_usuario->email : "" ?>" type="email" required />
                     <label for="email" class="labelInput">Email: </label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>

        </form>
    </div>

</body>
</html>

