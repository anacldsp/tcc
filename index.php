<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <header id="topo" class="topo"></header>
    <div class="img">
    <img src="img/logo.png.png" width="320" height="205" />
    </div>
    <title>Teen Cash</title>

    <style>
        .img{
            position: fixed;
            top: 10px;
            left: 42%;
         }
        .topo {
            width: 100%;
            height: 200px;
            background-color: #008037;
            background-position: center;
            background-repeat: no-repeat;
            box-sizing: border-box;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(5, 199, 0), rgb(4, 133, 1));
            text-align: center;
            color: white;
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
        a:hover{
            background-color: green;
        }
        .rodape {
             width: 97.5%;
             height: 50px;
             background-color: #008037;
             color: #ffffff;
             position: absolute;
             bottom: -1px;
             padding: 10px;
         }

    </style>
</head>
<body>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>

    <footer id="rodape" class="rodape">
         <p> TeenCash -  Educação financeira de jovens pra jovens </p>
      </footer>

</body>
</html>