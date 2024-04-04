<?php
    session_start();
    include '../includes/functions.php';
    include '../includes/nav-adm.php';
?>
<script src="../js/auth_admin.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../assets/sstyle.css">
    <title>Listar categoria</title>
    <style>
        .card-item {
            margin-bottom: 30px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            width: 50%;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            
        }

        .modal.show {
            display: block;
        }
    </style>
</head>
<body>
    
</body>
</html>
<div id="alerta">
</div>
	<div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <h1 class="font-class"> Categorias:</h1>
            </div>
        </div>

        <div id="categs-list">

        </div>

        <div id="modal-excluir" class="modal">
            <div class="modal-content">
            <h3 class="font-class"> Deseja mesmo excluir?</h3>
                <button id ="btnModalExcluirSim" class="btn btn-outline-danger">Sim</button>
                <button id="btnModalExcluirNao" class="btn btn-outline-dark">Não</button>
            </div>
        </div>

        <div id="modal-editar" class="modal">
            <div class="modal-content">
            <h1 class="font-class"> Editar categoria:</h1>
                <input type="hidden" id="id_categoria">
                <div class="form-group">
                    <label for="novaCateg">Nome:</label>
                    <input type="text" class="form-control" id="novaCateg" name="novaCateg">
                </div>

                <br><br>
                <button id = "btnModalEditarSim" class="btn btn-outline-success">Salvar</button>
                <br>
                <button id="btnModalEditarNao" class="btn btn-outline-dark">Cancelar</button>
            </div>
        </div>

        <div id="modal-informacao" class="modal">
            <div class="modal-content">
            <h1 class="font-class"> ver materiais:</h1>

                <div id="list-materiais">

                </div>
                
                <button id="btnModalFechar" class="btn btn-outline-dark">Fechar</button>
    
            </div>
        </div>

        <div id="modal-info" class="modal">
            <div class="modal-content">
                <p> Informações </p>
                <input type="hidden" id="id_materiais">
                
                <img id="ImagemProduto" class="img-fluid" alt="Imagem">
                
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" readonly>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" readonly>
                </div>
                
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco" readonly>
                </div>

                <br><br>
                <div class="col-12 text-left">

                    <div class="form-group" id="card-coments">
                        
                    </div>

                    <br>

                    <button id="btnModalFechar2" class="btn btn-dark">Fechar</button>
                </div>
            </div>   
        </div>
 
	</div>
    <a href="adicionar_categ.php" class="btn btn-dark mx-sm-3">Adicionar Categoria</a>
    
    <script src="../js/categoria_adm.js"></script>
    
    <?php include "../includes/footer.php"; ?>
