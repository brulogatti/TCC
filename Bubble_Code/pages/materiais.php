

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Ponto Com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link href="../css/.css" rel="stylesheet">



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
    include '../includes/nav-user.php';
    ?>
<div  class="container">
    <p id="livro"> Livros </p>

    <div class="book"> 
    <button type="button" id=" but "class="btn btn-outline-light">Acessar material</button>
    </div>

</div> 

<div class="danger">

    <p id="doc" > Documentários </p>

    <div class="document">
    <button type="button" class="btn btn-outline-light">Acessar material</button>

    </div>
</div>
<script src="../js/auth.js"></script>


<?php
include '../includes/footer.php';
?>