<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do usuário</title>
    <h1>Seu perfil:</h1>
    <style>
        body{
            background: linear-gradient(to right, rgb(5, 199, 0), rgb(4, 133, 1));
            text-align: center;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        #volta{
            position: fixed;
            bottom: 1;
            right: 1;
            margin-top: -80px;
            margin-left: 10px;
            margin-bottom: 10px;
            margin-right: 10px;
        }
            
        #sair{
            position: absolute;
            bottom: 1;
            right: 0;
            margin-top: -80px;
            margin-left: 50px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="d-flex" id="sair">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
         <div id ="volta">
            <a href="sistema.php">Voltar</a>
        </div>    
</body>
</html>
