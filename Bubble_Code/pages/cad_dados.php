

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Ponto Com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link href="../css/home.css" rel="stylesheet">



    <link rel="icon" href="">
    <style>
        .coment {
            display: none;
        }
        .produto.active {
            display: block;
        }
    </style>
</head>
<body>

    <?php
        include "../includes/functions.php";
        include "../includes/nav-adm.php";
      
    ?>

    <div>
            <h3 class="material_cadastro">Upload dos dados do robô </h3>

            <div class="container">
                <form method="post" id="formMaterial" enctype="multipart/form-data">


                <p> Querido administrador, faça o upload do arquivo CSV que tenha os dados mais atualizados do robô
                </p>

                <p>
                    <div class="form-group">
                        <label for="doc">Arquivo:</label>
                        <input type="file" name="doc" id="doc" class="form-control"  required>
                    </div>
                </p>

                <p>
                <div class="text-center">
                    <button id="adicionar_dados" class="btn btn-dark">Adicionar</button>
                </div>
            </p>

            </div>

                </form>
            </div>

    </div>

<script src="../js/auth.js"></script>

<?php

include '../includes/footer.php';

?>