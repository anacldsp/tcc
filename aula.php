<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de ensino</title>
    <h1>Ensino:</h1>
    <style>
        body{
            background: linear-gradient(to right, rgb(5, 199, 0), rgb(4, 133, 1));
            text-align: center;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        #volta{
            position: fixed;
            top: 0;
            right: 1;
            margin-top: 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            margin-right: 10px;
            
        }
        #sair{
            position: fixed;
            bottom: 1;
            top: 0;
            right: 0;
            margin-top: 10px;
            margin-left: 50px;
            margin-right: 10px;
           
        }
        .box {
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
        a:hover{
            background-color: green;
            cursor: pointer;
        } 
        
    </style>
    <body>
        
         <div id="sair">
            <a href="sair.php" >Sair</a>
        </div>
         <div id ="volta">
            <a href="sistema.php">Voltar</a>
        </div>
         
    <div class="box">
        <a href="video.php">Video Aula</a>
        <a href="apostila.php">Apostilas</a>
    </div>
    
</body>
        