<?php 

$servidor = "127.0.0.1";
$senha = "root";
$usuaruio = "root";
$db = "cardapio";

// $conexao = mysqli_connect($servidor, $senha, $usuaruio, $db);
$conexao = new mysqli($servidor, $senha, $usuaruio, $db);

