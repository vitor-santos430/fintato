<?php
    session_start();
    if(!isset($_SESSION['user'])){
        echo '<script>window.location.href = "login";</script>';
    }
?>

<h1>Painel aqui</h1>