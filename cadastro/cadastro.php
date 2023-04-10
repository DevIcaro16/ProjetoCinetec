<?php


include_once("../conexao/conexao.php");

    $nome = $_POST['username'];
    $email = $_POST['email'];
    $CPF = $_POST['CPF'];
    $telefone = $_POST['telefone'];
    $password = $_POST['password'];


$query = "INSERT INTO usuario(nome_usuario,senha_usuario,email_usuario,telefone_usuario,cpf_usuario) VALUES ('$nome','$password','$email','$telefone','$CPF')"  ;


$add_usuario = $connect ->prepare($query);
$add_usuario->execute();

if($add_usuario->rowCount()){

    echo"Usuário Cadastrado Com Sucesso!<br>Agora efetue o <a href='../login/login.html'>Login</a> no sistema .";

}else{


    echo"Erro: Não Foi Possivel Realizar o Cadastro!";
    
    }


/*
if(PDO::query($connect)){

    echo"<script>Usuário Cadastrado Com Sucesso!</script>";

}else{


echo"Erro, Não Foi Possivel Realizar o Cadastro!";

}







if(mysqli_query($connect,$query)){

    echo"Usuário Cadastrado Com Sucesso!";

}else{



echo" Erro".mysqli_connect_error($connect);

}

mysqli_close($connect);


*/


?>


