<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif ;
            background-image:linear-gradient(45deg,#330033,#9999CC) ;
            background-image:url(https://i.pinimg.com/originals/06/69/aa/0669aad6f34b6e6fff8765b44eb24979.gif);
            background-repeat:no-repeat ;
            background-size:cover;
        
        }
        #tela_login{
            background-color:#9966FF;
            text-align:center;
            padding:50px;
            max-width:350px;
            color:white;
            border-radius:40px ;
            display: flexbox;
            flex-direction:center;
            justify-content: center;
            align-items:center;
            border:2px solid black;
            margin-top: 25%;
            margin-left: 50%;
            transform:translate(-50%,-50%);
            
        }
        input{
            padding:10px;
            border:none;
            background-color:darkgrey; 
            font-size: 15px;
        }
        button{
            background:#330033;
            padding:15px;
            width:80%;
            border-radius:10px;
            font-size:15px;
            color:white;
        }
        button:hover{
            background-color:#9999CC;
            cursor: pointer;
            color:black;
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
        #submit{
            background-image:linear-gradient(45deg,#330033,#9999CC) ;
            width: 80%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image:linear-gradient(45deg,#330033,#373744) ;
        }
    </style>
</head>
<body>
    <a href="HOME.php">Home</a>
    <div class="content-fluid" id="tela_login">
        <form action="testelogin.php" method="post">
            <h1>Login</h1><br><br>
            <input type="text" name="email" placeholder="Email"><br><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>
            <input type="submit" name="submit" id="submit" value="Entrar">
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>