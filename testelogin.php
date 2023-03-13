<?php

session_start();
//print_r($_REQUEST);
if(isset($_POST['submit'])&& !empty($_POST['email']) && !empty($_POST['senha'])){
//acessa
    include_once('config.php');
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    //print_r('email:'.$email);
    //print_r('senha:'.$senha);
    //verifica se tem cadastrado no banco de dados
    $sql="SELECT * FROM  usuarios WHERE EMAIL ='$email' AND SENHA='$senha'";
    $result=$conexao->query($sql);
    //print_r($result);
    if(mysqli_num_rows($result)<1){
       unset($_SESSION['email']);
       unset($_SESSION['senha']); 
        header('Location: TELA_LOGIN.php');

    }
    else{
        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
         header('Location: sistemapage1.php');
    }
}
else{
  //não acessa  
    header('Location:TELA_LOGIN.php');
}
?>