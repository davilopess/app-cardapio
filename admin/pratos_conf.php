<?php
include '../db.php';

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    $query = "INSERT INTO pratos(nome) VALUES ('$nome')";

    $conexao->query( $query);

    header('Location: admin.php');

}

if (isset($_GET['id'])) {


    $id = mysqli_escape_string($conexao, $_GET['id']);
    $query = "DELETE FROM pratos WHERE id_prato = '$id'";

    $conexao->query( $query);

    header('Location: admin.php');
}