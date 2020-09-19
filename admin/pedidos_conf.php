<?php
include '../db.php';

if (isset($_GET['idEdit'])) {
    $nome = $_GET['idEdit'];

    echo $nome;

}

if (isset($_GET['id'])) {


    $id = mysqli_escape_string($conexao, $_GET['id']);
    $query = "DELETE FROM pedidos WHERE id_pedido = '$id'";

    $conexao->query($query);

    header('Location: admin.php?pagina=pedidos');
}