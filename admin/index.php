
<?php 

include 'header.php';

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class = container-admin>

<div class="container-login">
    <form class="container-form" action="index_login.php" method="post">
        <input type="text" name="usuario" placeholder="Usuário..." class="form-control">
        <input type="password" name="senha" placeholder="Senha..." class="form-control">
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Entrar">

        <?php
        if(isset($_GET['erro'])){ ?>
            <div class="alert alert-danger" role="alert">
            Senha ou usuario(a) incorreto!
            </div>
        <?php }; ?>

    </form>
</div>

</div>

<style>
    .container-admin{
        height: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    body{
        background-color: #f0f0f5;
    }
    .container-login {

        height: 100%;
        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .container-form {
        display: flex;
        flex-direction: column;

    }
    .container-form input {
        margin: 3px;
        

    }
</style>