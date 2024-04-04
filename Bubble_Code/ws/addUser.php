<?php
include "../includes/functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (checkEmail($data['email'])) {
        $response = ['success' => false, 'message' => 'Esse email já está em uso'];
    } else {
        $result = addUser($data['nome'], $data['data_nasc'], $data['email'], $data['senha'], $data['tipo']);

        if ($result) {
            $response = ['success' => true, 'message' => 'Cadastro efetuado com sucesso!'];
        } else {
            $response = ['success' => false, 'message' => 'Erro ao cadastrar conta.'];
        }
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
