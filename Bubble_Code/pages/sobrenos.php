

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Ponto Com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link href="../css/sobrenos.css" rel="stylesheet">



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
   
    
    <main>

            <section class="apresentacao">
                <div class="conteudo">
                    <div class="flex">
                         
                       <div class="txt">
                            <h1> APRESENTANDO A EQUIPE<span> DESENVOLVEDORA DO PROJETO</span></h1>

                            <p>O grupo desenvolvedor do projeto inclui três alunos do ensino médio integrado ao técnico Informática do IFSP Araraquara e um professor do superior. Aplicando seus conhecimentos, cada um desempenhou um papel importante para a conclusão do projeto.</p>
                        </div>


                        <div class="loop_foto">
                            <img src="../img/ardy.png" alt="Imagem do simbolo arduino">


                        </div>

                    </div>
                    
                </div>

            </section>


        <section class="nos">
            <div class="quadradinhos">
                <h2 class="title"> Grupo Desenvolvedor</h2>
                <div class="flex">
                    <div class="cada_box">
                        <img src="../img/naju.png" alt="Imagem de uma pessoa">
                        <h4> Ana Julia </h4>
                        <p>Ana Julia nana nana </p>
                          <p>Naturalidade: Brasil, Aararaquara- SP</p> 
                         <p>Idade: 17 anos</p>  
                         <p>Curso: Informática integrado ao ensino médio</p> 
                         <p>Escola: IFSP Campus Aararaquara</p>  
                        
                    </div>

                    <div class="cada_box">
                        <img src="../img/ju.jpg" alt="Imagem de uma pessoa">
                        <h4> Julia Torcinelli </h4>
                        <p> Julia Torcinelli Andrade </p>
                          <p>Naturalidade: Brasil, Bauru- SP</p> 
                         <p>Idade: 18 anos</p>  
                         <p>Curso: Informática integrado ao ensino médio</p> 
                         <p>Escola: IFSP Campus Aararaquara</p> 
                    </div>

                    <div class="cada_box">
                        <img src="../img/viny.jpeg" alt="Imagem de uma pessoa">
                        <h4> Vinycius Maia </h4>
                        <p> Vinycius da Silva Maia Almeida </p>
                          <p>Naturalidade: Brasil, Dourados - SP</p> 
                         <p>Idade: 19 anos</p>  
                         <p>Curso: Informática integrado ao ensino médio</p> 
                         <p>Escola: IFSP Campus Aararaquara</p> 
                    </div>
                </div>
            </div>
        </section>

    </main>

    
<?php
include '../includes/footer.php';
?>