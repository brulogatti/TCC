<?php

include "../includes/functions.php";
header("Content-Type: application/json");

$materiais = buscarCategoria();

echo json_encode($materiais);