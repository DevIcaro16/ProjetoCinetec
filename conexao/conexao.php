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

$sql2 = "UPDATE filmes SET num_disponibilidade = '' WHERE nome_titulo = '' ";
$result2 = $connect->query($sql2);
$precos = $result2->fetchAll();

$sql = "SELECT * FROM filmes " ;
$result = $connect->query($sql);
$inforFilmes = $result->fetchAll();

?>