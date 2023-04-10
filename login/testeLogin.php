<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['email_usuario']) && !empty($_POST['senha_usuario']) ){

    include_once("../conexao/conexao.php");

    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    

    $query_usuario = "SELECT * FROM usuario WHERE email_usuario = '$email_usuario' AND senha_usuario = '$senha_usuario' " ;

    $result = $connect->query($query_usuario);

    $rows = $result-> fetchAll() ;

    $numRegistros = $result->rowCount();
  
    if($numRegistros < 1){

        echo"<h2 style='color: #f00;'>Erro: informações de Login não encontradas! Volte e tente novamente </h2>";
        

    }else{

         foreach($rows as $row): 

            $_SESSION['nome_usuario'] = $row["nome_usuario"];
            $_SESSION['preco'] = $row["preco"] ;

         endforeach;


    
        $_SESSION['email_usuario'] = $email_usuario;
        $_SESSION['senha_usuario'] = $senha_usuario;
        header('Location: sistema.php');

    } 


}else{

    echo"<h2 style='color: #f00;'>Erro: informações de Login não encontradas! Volte e tente novamente </h2>";
    

   

  

} 


?>