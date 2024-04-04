<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/registro.css">
    <title> Cadastre um Usuário </title>
</head>

<body>

<div class="alerta" id="alerta">
    
</div>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2> Conecte-se </h2>
            <form method="post" id="formCadastro">
                <input type="hidden" value="A" id="tipo" name="tipo">

                <div class="input-box">
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome"> Nome </label>
                    <small id="errNome" class="erroJS"></small>
                    <i class='bx bxs-face'></i>
                   

                </div>

              
                <div class="input-box">
                    <input type="text" name="data_nasc" id="data_nasc" required>
                    <label for="data_nasc"> Data de Nascimento </label>
                    <small id="errDataNasc" class="erroJS"></small>

                    <i class='bx bxs-calendar'></i>

                </div>

                <div class="input-box">
                    <input type="text" name="email" id="email" required>
                    <label for="nome"> E-mail </label>
                    <i class='bx bxs-user'></i </div>
                </div>


                    <div class="input-box">
                        <input type="password" name="senha" id="senha" required>
                        <label for="senha"> Senha </label>
                        <small id="errSenha" class="erroJS"></small>

                        <i class='bx bxs-lock-alt'></i>

                    </div>

                    <button  id="btnAdd" class="btn"> Cadastrar </button>
            </form>
        </div>
        <div class="info-text register">
            <img src="" alt="" />
            <h2>Bem vindo!</h2>
            <p>
                Explore o "Bubble", seu guia para a qualidade da água
                e descubra como este robô inovador monitora a turbidez 
                para um ambiente aquático mais saudável. 💙🤖
            </p>
        </div>
    </div>
</body>
<script src="../js/addUser.js"></script>
<script src="../js/formJS.js"></script>