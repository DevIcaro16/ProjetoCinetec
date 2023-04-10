<?php
session_start();
if((!isset($_SESSION['email_usuario']) == true ) and (!isset($_SESSION['senha_usuario']) == true )){

    unset($_SESSION['email_usuario']);
    unset($_SESSION['senha_usuario']);
    header('Location : login.html');

}

    $logado = $_SESSION['nome_usuario'] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema: </title>
</head>
<body>
    <style>

        #h1{
            color: green;
        }

    </style>
    <h1 id="h1" > Bem Vindo! <?php echo $logado ; ?> </h1>
    <h2>Visualize os filmes em : <a href="../filmes/filmes.php">Filmes</a> </h2>
    
</body>
</html>


