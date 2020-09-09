<?php 

include '../db.php';
include 'header.php';
include 'nav.php';

@$url = $_GET['pagina'];


if($url == 'pratos'){

    include 'views_admin/pratos.php';
}
elseif($url == 'pedidos'){
    include 'views_admin/pedidos.php';
}
else{
    include 'views_admin/pratos.php';
}

?>

