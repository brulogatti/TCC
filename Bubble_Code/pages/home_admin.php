

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        include "../includes/nav-adm.php";
    ?>

    <div class="content">
        <h1>Saudações, x!</h1>
        <p>
            Explore o "Bubble", seu guia para a qualidade da água <br>
            e descubra como este robô inovador monitora a turbidez <br>
            para um ambiente aquático mais saudável. 💙🤖</p>
        <div>
            <button type="button" onclick="scrollToSection('about')"><span></span> Sobre o Bubble</button>
            <button type="button" onclick="scrollToFerramentas('ferramentas')"><span></span> Ferramentas</button>

            <script>
                function scrollToSection(aboutId) {
                    var about = document.getElementById(aboutId);
                    about.scrollIntoView({ behavior: 'smooth' });
                }
            </script>

            <script>
                function scrollToFerramentas(ferramentasId) {
                    var ferramentas = document.getElementById(ferramentasId);
                    ferramentas.scrollIntoView({ behavior: 'smooth' });
                }
            </script>
        </div>
    </div>
    </div>

    <div class="about" id="about">
        <div class="main">
            <img class="imgabout" src="../img/boo.png">
            <div class="about-text">
                <h2 class="h2animation">Sobre o robô</h2>
                <p class="panimation">
                    Explore o "Bubble", seu guia inovador para a qualidade da água.
                    Ao clicar no botão, desvende informações cruciais sobre turbidez
                    e testemunhe como este robô redefine o monitoramento hídrico.
                    Navegue pelas funcionalidades avançadas e mergulhe em um mundo
                    de conscientização ambiental. Junte-se a nós na busca por um
                    ambiente aquático mais saudável. Clique agora e descubra o
                    futuro da sustentabilidade!
                </p>
                <br><br>
                <a class="button" href="#"> Mais informações</a></p>
            </div>

        </div>
    </div>
    <br><br><br><br>

    <div class="ferramentas" id="ferramentas">
        <div class="tittle">
            <h2>Ferramentas</h2>
        </div>
        <div class="box">
            <div class="card">
                <i class="fas fa-bars"></i>
                <h5>Materiais didáticos</h5>
                <div class="pra">
                    <p>Descubra nossos materiais didáticos dedicados ao "Bubble"! Explore recursos educativos que
                        simplificam o entendimento da turbidez da água. </p>

                    <p style="text-align: center;">
                        <a class="button" href="#"> Explorar
                        </a>
                    </p>
                </div>
            </div>
            <div class="card">
                <i class="fas fa-bars"></i>
                <h5>Monitoramento</h5>
                <div class="pra">
                    <p>Explore o "Bubble" e sua tecnologia de monitoramento de última geração. Obtenha dados precisos
                        sobre a turbidez da água e promova a conscientização ambiental.</p>

                    <p style="text-align: center;">
                        <a class="button" href="#"> Monitorar</a>
                    </p>
                </div>
            </div>
            <div class="card">
                <i class="fas fa-bars"></i>
                <h5>Projetos</h5>
                <div class="pra">
                    <p>
                        Inspire-se para projetos similares com o "Bubble"! Oferecemos informações abrangentes para quem
                        deseja iniciar seu próprio projeto, clique e saiba mais.
                    </p>

                    <p style="text-align: center;">
                        <a class="button" href="#"> Saiba mais</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/auth.js"></script>
<?php

include '../includes/footer.php';

?>