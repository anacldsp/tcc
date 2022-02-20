<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de video aula</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(5, 199, 0), rgb(4, 133, 1));
            text-align: center;
            color: white;
        }
        #volta{
            position: fixed;
            bottom: 1;
            right: 1;
            margin-top: 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            margin-right: 10px;
            background-color: darkgreen;
            padding: 15px;
            text-decoration: none;
            color:white;
            border-radius: 15px;
        }
            
        #sair{
            position: absolute;
            bottom: 1;
            right: 0;
            margin-top: 10px;
            margin-left: 50px;
            margin-right: 10px;
            background-color: red;
            padding: 15px;
            text-decoration: none;
            color:white;
            border-radius: 15px;
            
        }
        
        #aulas{
            position: absolute;
            top: 1;            
         }
         .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px; 
            padding-bottom: 2px;
            padding-top: 25px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 15px;
            font-family: 'Poppins', sans-serif;
        }
        
        </style>
    <body>
        <div class="d-flex" id="sair">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
         <div id ="volta">
            <a href="aula.php">Voltar</a>
        </div>
     <div class="box" id="aulas">
     <iframe width="640" height="360" src="https://www.youtube.com/embed/SiIztrwfg1s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>O que é educação financeira?</p>
                <br></br>
                <iframe width="640" height="360" src="https://www.youtube.com/embed/ZCMxPiWWTcw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>Teste sua inteligência</p>
         </div>
     </body>
