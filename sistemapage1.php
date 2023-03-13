<?php
session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email'])==true) and (isset($_SESSION['senha'])==true))
{
    unset($_SESSION['email']);
    unset( $_SESSION['senha']);   
    header('Location: TELA_LOGIN.php');
}
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios ORDER BY ID ASC ";

    $result = $conexao-> query($sql);
    print_r($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Pagina 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
           background-image:linear-gradient(45deg,#330033,#9999CC) ;

        }
        #box1,h1{
            background-color:#9966FF;
            text-align:center;
            max-width:800px;
            color:white;
            border-radius:20px ;
            display: flexbox;
            flex-direction:center;
            justify-content: center;
            align-items:center;
            border:2px solid black;
            margin-left:20rem ;
            padding: 15px;}
            .table-bg{
                background: rgba(0, 0, 0, 0.4);
                border-radius: 15px 15px 0 0;
            }
            #cor{color: red;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-5" type="submit">Search</button>
        <a href="sair.php" class="btn btn-danger me-5">Loggout</a>
      </form>
    </div>
  </div>
</nav>  
<div class="box1">
<?php
    echo"<h1>Bem vindo <u> $logado</u></h1>";

?>
</div>    

<div class="m-5" >
    <table class="table text-white table-bg">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">NOME</th>
        <th scope="col">SENHA</th>
        <th scope="col">EMAIL</th>
        <th scope="col">TELEFONE</th>
        <th scope="col">SEXO</th>
        <th scope="col">DATA_NASC</th>
        <th scope="col">CIDADE</th>
        <th scope="col">ESTADO</th>
        <th scope="col">ENDERECO</th>
        <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
            <?php 
                while($user_data = mysqli_fetch_assoc($result)){
                    echo"<tr>";
                    echo "<td>" .$user_data ['ID']."</td>";
                    echo "<td>" .$user_data ['NOME']."</td>";
                    echo "<td>" .$user_data ['SENHA']."</td>";
                    echo "<td>" .$user_data ['EMAIL']."</td>";
                    echo "<td>" .$user_data ['TELEFONE']."</td>";
                    echo "<td>" .$user_data ['SEXO']."</td>";
                    echo "<td>" .$user_data ['DATA_NASC']."</td>";
                    echo "<td>" .$user_data ['CIDADE']."</td>";
                    echo "<td>" .$user_data ['ESTADO']."</td>";
                    echo "<td>" .$user_data ['ENDERECO']."</td>";
                    echo "<td>
                        <a class='btm btn-primary' href='edit.php?ID=$user_data[ID]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                        </svg>
                        </a>
                    </td>";
                    echo"</tr>";

                }    
            ?>
    </tbody>
    </table>
      
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>