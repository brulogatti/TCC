<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Conecte-se </title>
</head>

<body>
<?php 
    include '../includes/functions.php';
?>

<div class="alerta" id="alerta">
</div> 

    <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2> Login </h2>
            <form method="post" id="formLogin">
                <div class="input-box">
                    <input type="text" id="email" name="email" required>
                    <label for="email"> E-mail </label>
                    <i class='bx bxs-user'></i>
                    <small id="errEmail" class="erroJS"></small>
                </div>

                <div class="input-box">
                    <input type="password" id="senha" name="senha" required>
                    <label for="password"> Senha </label>
                    <i class='bx bxs-lock-alt'></i>
                    <small id="errSenha" class="erroJS"></small>

                </div>

                <button id="btnLogin"  class="btn"> Entrar </button>
                <div class="logreg-link">
                    <p> Ainda não possui uma conta? <a href="../pages/cadastro.php" class="register-link"> Cadastre-se! </a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
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
<script src="../js/login.js"></script>
<script src="../js/formLogin.js"></script>
<?php
include '../includes/footer.php';
?>