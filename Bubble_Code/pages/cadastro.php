<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Venha ser um Usuário </title>
</head>
<body>

    <div class="alerta" id="alerta"></div>

    <div class="wrapper">
        <span class="bg-animate"></span>

        <div class="form-box login">
            <h2> Conecte-se </h2>

            <form method="post" id="formCadastro">
                <input type="hidden" value="B" id="tipo" name="tipo">

                <div class="input-box">
                    <input type="text" name="nome" id="nome" required />
                    <label for="nome"> Nome </label>
                    <i class='bx bxs-face'></i>
                    
                    <small id="errNome" class="erroJS"></small>
                </div>

                <div class="input-box">
                    <input type="text" name="data_nasc" id="data_nasc" required />
                    <label for="data_nasc"> Data de Nascimento </label>
                    <i class='bx bxs-calendar'></i>
                    
                    <small id="errDataNasc" class="erroJS"></small>
                </div>

                <div class="input-box">
                    <input type="text" name="email" id="email" required />
                    <label for="nome"> E-mail </label>
                    <i class='bx bxs-user'></i> 
                    <small id="errEmail" class="erroJS"></small>
                </div>

                <div class="input-box">
                    <input type="password" name="senha" id="senha" required />
                    <label for="senha"> Senha </label>
                    <i class='bx bx-show' id="togglePassword"></i>
                    
                    <small id="errSenha" class="erroJS"></small>
                </div>

                <button  id="btnAdd" class="btn btn-dark"> Entrar </button>
                <div class="logreg-link">
                    <p> <br>Já possui uma conta? <a href="../pages/login.php" class="register-link"> Acesse agora! </a></p>
                </div>
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
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#senha');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        this.classList.toggle('bx-hide');
        this.classList.toggle('bx-show');
    });
</script>

<script src="../js/addUser.js"></script>
<script src="../js/formJS.js"></script>

