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

/*

function validarCPF($cpf){

    $cpf = preg_replace('/[^0-9]/',"",$cpf);

    if(strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {

            echo"CPF inválido!";

    }else{

        $cpf = str_split($cpf,1);
        $numMult = 10;
        $soma = 0;
        $result1 = 0;
        $valido = false;

        for($i=0;$i<9;$i++){

            $soma += $cpf[$i] * $numMult;
            $numMult--;

        }

    $result1 = ($soma * 10)%11;

        $numMult2 = 11;
        $soma2 = 0;
        $result2 = 0;

        for($i=0;$i<10;$i++){

            $soma2 += $cpf[$i] * $numMult2;
            $numMult2--;

        }

    $result2 = ($soma2 * 10)%11;

        if($result1 != $cpf[9] || $result2 != $cpf[0] ){

            $valido = false;

        }else{

            $valido = true;

        }

        $cpf = implode($cpf);


    if($valido == true){

        echo "CPF = $cpf <br> SITUAÇÃO : VÁLIDO!<br>";

    }else{

        echo "CPF = $cpf <br> SITUAÇÃO : INVÁLIDO!<br>";

        }

    }

}

*/


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


