<?php
include "../includes/functions.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $result = false;

    if(isset($_POST["id"]) and isset($_POST["token"])){
        $result = validateToken($_POST["id"],$_POST["token"]);
    }

    if($result){
        $response = ['success' => true, 'message' => 'Token validado'];
    }else{
        $response = ['success' => false, 'message' => 'Erro ao validar token'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}