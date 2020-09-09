<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


<div class="container-table">
    <div class="container-nome">
        <form method="" >
            <input type="text" name="nome" placeholder="Pesquisar um pedido">
            
            <button type=""  class="btn-floating"><i class="material-icons">search</i></button>
        </form>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>
                        Nome
                    </th>

                    <th>
                        Empresa
                    </th>

                    <th>
                        Prato 
                    </th>
                    <th>
                        Acompanhamentos 
                    </th>
            </thead>
            <tbody>
                <?php
                    include '../db.php';
                    $query = "SELECT * FROM pedidos";
                    $consulta= $conexao->query( $query);
                    while($dados = $consulta->fetch_array(MYSQLI_ASSOC)){

                ?>
                <tr>
                    <td>
                        <?php echo $dados['nome_func']; ?>
                    </td>
                    <td>
                        <?php echo $dados['empresa']; ?>
                    </td>
                    <td>
                        <?php echo $dados['prato']; ?>
                    </td> 
                    <td>
                        <?php echo $dados['acompanhamento']; ?>
                    </td> 


                    <!-- <td><a href="" class="btn-floating"><i class="material-icons">create</i></a></td> -->
                    <td class="center"><a href="pedidos_conf.php?idEdit=<?php echo $dados['id_pedido']; ?>"
                     class="btn-floating red modal-trigger"><i class="material-icons">edit </i></a></td>
                    <td class="center"><a href="pedidos_conf.php?id=<?php echo $dados['id_pedido']; ?>"
                     class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

          
                </tr>
                <?php }; ?>

            </tbody>
        </table>
    </div> 
</div>



<style>

    .container-table{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-family: Roboto;
    }
    
    .container-table div.container-nome{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        padding: 20px;


    }
    .container-table div.container-nome form{
        width:90%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        


    }
    .container-table div{
        width:700px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        margin:20px;
    
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td.center {
        text-align: center;
        
    }
    th, td {
        text-align: left;
        padding: 20px;
    }
    tr {
        border-bottom: none; 
    }
    tr:hover {background-color: #f5f5f5;}

    tr:nth-child(even) {background-color: #f5f5f5;}

</style>