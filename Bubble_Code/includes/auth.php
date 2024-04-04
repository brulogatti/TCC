<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (!isset($_SESSION['usuario'])) {
        header("Location:../pages/login.php");
        exit;
    }

    if(!isset($_GET['id']) || $_SESSION['usuario']['id'] != $_GET['id']) {
        header("Location:../pages/login.php");
        exit;
        }
        
?>