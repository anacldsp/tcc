<?php
    session_start();
    include_once('DAO/MySQL.php');
     //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $sql = "SELECT nome FROM usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Teen Cash</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(5, 199, 0), rgb(4, 133, 1));
            color: white;
            text-align: center;
        }
       
        </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" >Sair</a>
        </div>
    </nav>
    <br>
    <?php
       
        ?>
    <br>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid green;
            border-radius: 10px;
            padding: 10px;
        }

        
    </style>
    <div class="box">
        <a href="aula.php">Aprendizados</a>
        <a href="perfil.php">Seu perfil</a>
    </div>
</body>
</html>