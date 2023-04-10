<?php

session_start();

include_once("../conexao/conexao.php");

$logado = $_SESSION['nome_usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmes: </title>
</head>
<body>


<form action="compra.php" method="POST">

<h2><?= $logado  ?>, Nossos Filmes disponiveis são : </h2>

  <?php foreach($inforFilmes as $inforFilme):  ?>

    
    
    <div class="table-filmes">

    
    
     <form action="compra.php" method="POST">

     <ol>

      <img src="../img/<?= $inforFilme["capa"] ?>" alt="<?= $inforFilme["nome_titulo"] ?>">
      <ul scope="row"><h3>Titulo: <?= $inforFilme["nome_titulo"] ?> </h3></ul>
      <ul scope="row"><h3>Disponibilidade: <?= $inforFilme["num_disponibilidade"] ?></h3></ul>
      <ul scope="row"><h3>Preço: <?= $inforFilme["preco"]  ?> </h3></ul>
      <ul scope="row"><h3>Sinopse: <?= $inforFilme["sinopse"] ?></h3></ul>
      <ul scope="row"><h3>Lançamento: <?= $inforFilme["ano_lancamento"] ?></h3></ul>
      <ul scope="row"><h3>Gênero: <?= $inforFilme["genero"] ?></h3></ul>
      <ul><button type="submit">Comprar</button></ul>

      

    </ol>

    

    <?php endforeach ?>
    
    

     </form>

     

    </div>


 

</body>
</html>