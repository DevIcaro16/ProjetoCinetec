<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['email_usuario']) && !empty($_POST['senha_usuario']) ){

    include_once("../conexao/conexao.php");

    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    
    $query_usuario = "SELECT * FROM usuario WHERE email_usuario = '$email_usuario' AND senha_usuario = '$senha_usuario' " ;
    $query_adm = "SELECT * FROM adm WHERE email_adm = '$email_usuario' AND senha_adm = '$senha_usuario' " ;

    
    $result_usuario = $connect->query($query_usuario);
    $result_adm = $connect->query($query_adm);

    $rows_usuario = $result_usuario-> fetchAll() ;
    $rows_adm = $result_adm-> fetchAll() ;

    $numRegistros_usuario = $result_usuario->rowCount();
    $numRegistros_adm = $result_adm->rowCount();
  
    if($numRegistros_usuario < 1){

        echo"<h2 style='color: #f00;'>Erro: informações de Login não encontradas! Volte e tente novamente </h2>";
        

    }else{

         foreach($rows_usuario as $row): 

            $_SESSION['nome_usuario'] = $row["nome_usuario"];
            

         endforeach;

    
        $_SESSION['email_usuario'] = $email_usuario;
        $_SESSION['senha_usuario'] = $senha_usuario;
    
        header('Location: sistema.php');

    } 

    if($numRegistros_adm < 1){

        echo"<h2 style='color: #f00;'>Erro: informações de Login não encontradas! Volte e tente novamente </h2>";


    }else{

        foreach($rows_adm as $row): 

            $_SESSION['nome_adm'] = $row["nome_adm"];
            $_SESSION['email_adm'] = $row["email_adm"];



         endforeach;
        foreach($rows_all_usuario as $row): 

            $_SESSION['nome_usuario'] = $row["nome_usuario"];
            $_SESSION['senha_usuario'] = $row["senha_usuario"] ;
            $_SESSION['email_usuario'] = $row["email_usuario"] ;
            $_SESSION['telefone_usuario'] = $row["telefone_usuario"] ;
            $_SESSION['cpf_usuario'] = $row["cpf_usuario"] ;
            

         endforeach;

         $_SESSION['nome_usuario'] = $nome_usuario;
         $_SESSION['telefone_usuario'] = $telefone_usuario ;
         $_SESSION['cpf_usuario'] = $cpf_usuario;
         $_SESSION['email_usuario'] = $email_usuario;
         $_SESSION['senha_usuario'] = $senha_usuario;
         header('Location: sistemaAdm.php');

    }


}else{

    echo"<h2 style='color: #f00;'>Erro: informações de Login não encontradas! Volte e tente novamente </h2>";
    

   

  

} 


?>