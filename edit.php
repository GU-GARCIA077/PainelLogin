<?php
if(isset($_POST['submit'])){
    //print_r($_POST['nome']);
    //print_r("<br>");
    //print_r($_POST['email']);
    //print_r("<br>");
    //print_r($_POST['tel']);
    //print_r("<br>");
    //print_r($_POST['genero']);
    //print_r("<br>");
    //print_r($_POST['cidade']);
    //print_r("<br>");
    //print_r($_POST['estado']);
    //print_r("<br>");
    //print_r($_POST['endereco']);

include_once('config.php');
    
$nm=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$telefone=$_POST['tel'];
$sexo=$_POST['genero'];
$data_nasc=$_POST['data_nasc'];
$cid=$_POST['cidade'];
$est=$_POST['estado'];
$end=$_POST['endereco'];
$sql= "INSERT INTO usuarios (ID,NOME,SENHA,EMAIL,TELEFONE,SEXO,DATA_NASC,CIDADE,ESTADO,ENDERECO) VALUES ('NULL','$nm','$senha','$email','$telefone','$sexo','$data_nasc','$cid','$est','$end')";
$result= mysqli_query($conexao,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
           background-image:linear-gradient(45deg,#330033,#9999CC) ;

        }
        .box{
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
            margin-top: 35%;
            margin-left: 50%;
            transform:translate(-50%,-50%);
            padding: 15px;
            
        }
        fieldset{
            border: 3px solid white;
        }
        legend{
            border: 1 px solid white;
            padding: 10px;
            text-align: center;
            background-color:#330033 ;
            border-radius:10px ;
            color: white;
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: #330033;
            border:none ;
            border-bottom:2px solid white ;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            padding: 5px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events:none ;
            transition: .5s;
        }
        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color:black;

        }
        #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;

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
        
    </style>
</head>
<body>
<a href="Home.php">Home</a>
<div class="box">
    <form action="formulario.php" method="post">
        <fieldset>
            <legend><b>Formulário de Clientes</b></legend>
            <br><br>
            <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="Nome Completo" class="labelinput">Nome Completo</label>
            </div><br>
            <div class="inputbox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelinput">Senha</label>
            </div><br>
            <div class="inputbox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="Email" class="labelinput">Email</label>
            </div><br>
            <div class="inputbox">
                <input type="tel" name="tel" id="tel" class="inputUser" required>
                <label for="tel" class="labelinput">Telefone</label>
            </div>
            <p>Sexo:</p>
            <input type="radio" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label><br>
            <input type="radio" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label><br>
            <input type="radio" name="genero" value="Outro" required>
            <label for="Outro">Outro</label><br><br>
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="data_nasc" required>  
            <br><br>
            <div class="inputbox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelinput">Cidade</label>
            </div><br>
            <div class="inputbox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado"class="labelinput">Estado</label>
            </div><br>
            <div class="inputbox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelinput">Endereço</label>
            </div><br>
            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>