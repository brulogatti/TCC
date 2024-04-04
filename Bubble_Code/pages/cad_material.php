

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
            <h3 class="material_cadastro">Cadastrar material</h3>

            <div class="container">
                <form method="post" id="formMaterial" enctype="multipart/form-data">

                <p>
                    <div class="form-group">
                        <label for="nome_material">Título do material:</label>
                        <input type="text" name="nome_material" id="nome_material" class="form-control" placeholder="Digite o título do material para publicação" required>
                        <small id="errNome_material" class="erroMaterial"></small>
                    </div>
                </p>




                <p>
                    <div class="form-group">
                        <label for="video">Link do vídeo:</label>
                        <input type="text" name="video" id="video" class="form-control" required>
                    </div>  
                </p>


                <p>
                    <div class="form-group">
                        <label for="noticia">Notícia referente ao assunto:</label>
                        <input type="text" name="noticia" id="descricao_material" class="form-control" placeholder="Digite a descrição do material para publicação" required>
                    </div>
                </p>


                <p>
                    <div class="form-group">
                        <label for="doc">Arquivo:</label>
                        <input type="text" name="doc" id="doc" class="form-control"  required>
                    </div>
                </p>




                <div class="form-group">
                    <label for="categorias" class="categorias_label">Categorias:</label>
                    <?php
                        $result = consultarCategoria();
                        foreach ($result as $row):
                    ?>
                        <br> <input type="checkbox" class="form-check-input categoria-checkbox" id="<?php echo $row['id_categoria'] ?>" name="categoria" value="<?php echo $row['id_categoria'] ?>"> <?php echo $row["nome_cat"] ?>
                    <?php
                        endforeach;
                    ?>
                </div>

                <p>
                <div class="text-center">
                    <button id="adicionar" class="btn btn-dark">Adicionar</button>
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