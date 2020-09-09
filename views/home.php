<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div class = "menu">
    <div class="banner">
                <img src="assets/logo.png" alt="Logotipo do Cardapio">
                
    </div>
    <?php
    
    //chama o arquivo de configuração com o banco
    include "db.php";
    
    $query = $conexao->query( "SELECT * FROM pratos");
    
    ?>
    <form class="formulario" id="form" method="post" action="views/pedido.php">
        <input type="hidden" name="add" value="true">
        <section class = "container">
                <p>Nome (Completo)</p>
                <input id="nome"class="form-control" type="text" name="nome_func">
        </section>

        <section class = "container ">
            <section class = "container-row">
                    <p> Empresa</p><br>
            </section>

            <section class = "container-row">
                <li>
                        <input  class="limited" type="checkbox" name="empresa" value="ACO MARANHAO">
                        <label>ACO MARANHAO</label>
                </li>
                <li>
                        <input class="limited" type="checkbox" name="empresa" value="DIMENSAO">
                        <label for="vehicle1"> DIMENSAO</label><br>
                </li>

                <li>
                        <input class="limited" type="checkbox" name="empresa" value="DIRETORIA">
                        <label for="vehicle1"> DIRETORIA</label><br>
                </li>
            </section>
        </section>
        
        <section class = "container ">
            <p> Prato Principal</p><br>
            <section class = "container-row">
                        
                        <select class="form-control form-control-lg" name="prato" >
                            <option id="prato" value="">Selecione...</option>
                            <?php while($prod = $query->fetch_array(MYSQLI_ASSOC)) { ?>
                                <option id="prato" value="<?php echo $prod['nome'] ?>"><?php echo $prod['nome'] ?></option>
                            <?php } ?>

                        </select>
            </section>
        </section>

        <section class = "container ">
            <section class = "container-row">
                        <p> Prato Vegetariano</p><br>
            </section>
            <section class = "container-row">
                <li>
                        <input class="limited2" type="checkbox" name="prato" value="Vegetariano 1">
                        <label>Frango Grelhado (Arroz Integral, feijão, salada de tabule, alface, chips e torta vegetariana)</label>
                </li>
                <li>
                        <input class="limited2" type="checkbox" name="prato" value="Vegetariano 2">
                        <label for="vehicle1"> Salada lá prediletta com frango trinchado(mix de alface, cenoura, pepino, tomate, manga, vagem, abobrinha, beterraba, macaxeira cozida e milho</label><br>
                </li>
            </section>
        </section>

        <section class = "container ">
            <section class = "container-row">
                    <p> Acompanhamentos <strong>(Selecionar apenas três opções)</strong></p><br>
            </section>

            <section class = "container-row">
                <li>
                        <input class="limited3" type="checkbox" name="acompanhamento[]" value="Arroz a Grega">
                        <label>Arroz a Grega</label>
                </li>
                <li>
                        <input class="limited3" type="checkbox" name="acompanhamento[]" value="Arroz Branco">
                        <label for="vehicle1"> Arroz Branco</label><br>
                </li>

                <li>
                        <input class="limited3" type="checkbox" name="acompanhamento[]" value="Arroz integral">
                        <label for="vehicle1"> Arroz integral</label><br>
                </li>

                <li>
                        <input class="limited3" type="checkbox" name="acompanhamento[]" value="Macarrão">
                        <label for="vehicle1"> Macarrão</label><br>
                </li>

                <li>
                        <input class="limited3" type="checkbox" name="acompanhamento[]" value="Feijão Preto">
                        <label for="vehicle1"> Feijão Preto</label><br>
                </li>
            </section>
        </section>
        <button class="btn btn-secondary btn-block m-3 " type="submit">Enviar</button>
    </form>

</div>
<script>
    $("#form").submit(function() {
    if($("#nome").val()== null || $("#nome").val() ==""){
        alert('Informe seu nome completo');      
        return false;

    }
    });

    $(document).on('click', '.limited3', function(){
        var limit = 3;
        var counter = $('.limited3:checked').length;
        if(counter > limit) {
            this.checked = false;
            alert('Limite atingido');
    }
    });

    $(document).on('click', '.limited', function(){
        var limit = 1;
        var counter = $('.limited:checked').length;
        if(counter > limit) {
            this.checked = false;
            alert('Limite atingido');
    }
    });
    $(document).on('click', '.limited2', function(){
        var limit = 1;
        var counter = $('.limited2:checked').length;
        if(counter > limit) {
            this.checked = false;
            alert('Limite atingido');
    }
    });
</script>
<style>
    .formulario {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }
    label{
        color: #696969;
        margin:0px 5px;
    }
    .banner{
        height: 200px;
        width: 200px;
        display: flex;
        align-items: center;
        
        justify-content: center;

    }
    .banner img{
        height: 200px;
        width: 200px;
        display: flex;
        align-items: center;
        
    }
    p{  
        color: #696969;
        font-size: 20px;
        font-weight: bold;
    }
    button{
        width: 19%;
        border-radius: 28px; 
        padding: 15px;
        background-color: #red;
    }
    li{
        margin: 3px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .container-row{
        display: flex;
        
        flex-direction: column;  
        
        
    }
    .container{
        width: 700px;
        padding: 20px;
        margin-top: 4%;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        font-family: Roboto;
        font-size: 18px;
        display: flex;
        align-items: center;
        flex-direction: column;  
        word-break: break-all;
    }
    .menu{
 
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;  
    }
    body{
        font: 400 14px Roboto, sans-serif;
        background: #f0f0f5;
        -webkit-font-smoothing: antialiased;
    }

    .border{
        height: 20px;
        width: 60%;
        color: #333;
        border: 1px solid #dcdce6;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        padding: 0 24px;
    }

</style>