<?php
include "../includes/functions.php";
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $data = json_decode(file_get_contents("php://input"),true);
        $result = adicionarCategoria($data["categorias"]);

        if($result){
            $response = ['success' => true, 'message' => 'Categoria adicionada!'];
        }else{
            $response = ['success' => false, 'message' => 'Erro ao inserir a categoria'];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }