<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
           background-image:linear-gradient(45deg,#330033,#9999CC) ;

        }
        .box1{
            background-color:#9966FF;
            text-align:center;
            max-width:450px;
            color:white;
            border-radius:20px ;
            display: flexbox;
            flex-direction:center;
            justify-content: center;
            align-items:center;
            border:2px solid black;
            margin-top: 20%;
            margin-left: 50%;
            transform:translate(-50%,-50%);
            padding: 15px;
            
        }
        a{
            text-decoration: none;
            color: white;
            border 3px solid #9999CC;
            background-image:linear-gradient(45deg,#330033,#9999CC) ;
            width: 80%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        a:hover{
            background-image:linear-gradient(45deg,#330033,#373744) ;
        }
        #responsive{
            text-align:center;
            color:white;
            display: flexbox;
            flex-direction:center;
            justify-content: center;
        }
    </style>
</head>
<body>
    
    <div class="content-fluid" id="responsive">
        <h1>Bem vindo ao Sistema Com Login</h1>
        <h2>desenvolvido por Gustavo Carvalho</h2>
    </div>
    <div class="box1"> 
    <img src="\PROJETO SISTEMA LOGIN\FOTOS\computer.png" class="img-fluid" width=400px height="400px">
       <a href="TELA_LOGIN.php">Login</a> 
       <a href="formulario.php">Cadastre-se</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>