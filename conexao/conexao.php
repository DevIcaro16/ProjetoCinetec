<?php

$serv = "localhost";
$user = "root";
$password = "qwe123";
$bd = "cinetec";

try {
    $connect = new PDO("mysql:host=$serv;dbname=$bd",$user,$password);
} catch (PDOException $e) {

    $e -> getMessage();

}

$query_all_usuario = "SELECT * FROM usuario";
$result_all_usuario = $connect->query($query_all_usuario);
$rows_all_usuario = $result_all_usuario-> fetchAll() ;

$query_compra = "UPDATE filmes SET num_disponibilidade = '' WHERE nome_titulo = '' ";
$result2 = $connect->query($query_compra);
$precos = $result2->fetchAll();

$query_selecionar_filmes = "SELECT * FROM filmes " ;
$result = $connect->query($query_selecionar_filmes);
$inforFilmes = $result->fetchAll();

?>