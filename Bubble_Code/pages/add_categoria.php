<?php
    include '../includes/functions.php';

    if(session_status() !== PHP_SESSION_ACTIVE):
        session_start();
    endif;

    include '../includes/nav-adm.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link href="../css/home.css" rel="stylesheet">
    <title></title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
        <h1 class="font-class"> Cadastro de Categoria(s):</h1>
        </div>
    </div>
            
    <div class="container">
        <form method="post"> 
            <div class="form-group">
                <label for="categoria">Adicione uma nova categoria: </label>
                <input type="text" class="form-control" name="categoria" id="categoria">
            </div>
            <br>
            <div class="text-center">
                <button id="adicionar" class="btn btn-dark">Adicionar</button>
            </div>
        </form>
    </div>
    <script src="../js/add_categoria.js"></script>
</div>

</body>
</html>

<?php include '../includes/footer.php'; ?>