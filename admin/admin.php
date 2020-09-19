<?php 

include '../db.php';





        
session_start();
        include 'header.php';
        include 'nav.php';
        if(isset($_SESSION['login'])){
            
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
        }

    
?>

