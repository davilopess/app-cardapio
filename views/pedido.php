<?php
include '../db.php';
if(isset($_POST['add'])){

    $nome_func = $_POST['nome_func'];
    $empresa = $_POST['empresa'];
    $prato = $_POST['prato'];
    $array_acompanhamento =$_POST['acompanhamento'];
    $acompanhamento = implode("/", $array_acompanhamento);
    // echo $nome_func.'<br>';
    // foreach ($empresa as $empresa=>$value) {
        //     echo $value.'<br>';
        // }
        // echo $prato.'<br>';
        // echo $empresa.'<br>';
        // foreach ($acompanhamento as $acompanhemento=>$value) {
            //     echo $value.'<br>';
            // }
            // echo $acompanhamento.'<br>';
            
    $query = "INSERT INTO pedidos(nome_func, empresa, prato, acompanhamento) VALUES ('$nome_func',
    '$empresa', '$prato', '$acompanhamento' )";
            
    $conexao->query($query);

}
include 'header.php';
$nome_func = $_POST['nome_func'];

$consulta =$conexao->query("SELECT * FROM pedidos WHERE nome_func = '$nome_func' LIMIT 1");
$dados = $consulta->fetch_array(MYSQLI_ASSOC);
$id_pedido = $dados['id_pedido'];


if(isset($_POST['edit'])){

    
    
    $empresa = $_POST['empresa'];
    $prato = $_POST['prato'];
    $array_acompanhamento =$_POST['acompanhamento'];
    $acompanhamento = implode("/", $array_acompanhamento);
            
        
        
    $conexao->query( "UPDATE pedidos SET nome_func = '$nome_func', empresa = '$empresa', prato = '$prato', acompanhamento = '$acompanhamento' WHERE id_pedido = '$id_pedido'");
        

}
        

?>

<div class="container">
    <div class= "container-view">
        <ul>
            <li>
                <strong>Nome</strong>
                <p><?php echo $nome_func ?></p>

                <strong>Empresa</strong>
                <p><?php echo $empresa ?></p>

                <strong>Prato</strong>
                <p><?php echo $prato ?></p>

                <strong>Acompanhamento</strong>
                <p><?php echo $acompanhamento ?></p>
            </li>
        </ul>
        <ul class="elements">
            <a href="http://localhost/app">Voltar</a>
            <a href="editar_pedido.php?id=<?php echo $dados['id_pedido'];?>">Editar</a>
        </ul>
    </div>
</div>

<style>
    .elements {
        display: flex;
        align-items: center;
        flex-direction: row-reverse;  
    }
    .container {
        display: flex;
        align-items: center;
        flex-direction: column;  
    }
    .container-view{
        width: 700px;
        padding: 20px;
        margin-top: 4%;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        font-family: Roboto;
        font-size: 18px;
        display: flex;
        
        flex-direction: column;  
        word-break: break-all;
    }
</style>