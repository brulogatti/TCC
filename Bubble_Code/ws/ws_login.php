<?php
include "../includes/functions.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'):
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $usuario = login($email,$senha);

    if($usuario){
        $response = ['success' => true, 'message' => 'Login efetuado com sucesso', 'id' => $usuario['id'], 'token' => $usuario['token'],  'tipo' => $usuario['tipo']];
    }else{
        $response = ['success' => false, 'message' => 'Erro ao efetuar login'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
endif;
?>