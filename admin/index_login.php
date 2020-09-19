
<?php

    include '../db.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $query = "SELECT * FROM admins WHERE usuario = '$usuario' and senha = '$senha' ";

    $consulta = $conexao->query($query);

    if (mysqli_num_rows($consulta) == 1){

        session_start();
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $usuario;

        echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
    }else {
        echo "<meta http-equiv='refresh' content='0;url=index.php?erro'>";
    };

?>