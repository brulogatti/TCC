<?php

include "../includes/functions.php";
header("Content-Type: application/json");

if($_SERVER["REQUEST_METHOD"] === "GET"){
    $id = $_GET["id"];
    $nome_cat = buscarCategoriaPorId($id);
}

echo json_encode($nome_cat);