let baseUrl = "http://localhost/WEB/TCC/ws/";

function addUser(e){
    e.preventDefault();
    const nome = document.getElementById("nome").value;
    const data_nasc = document.getElementById("data_nasc").value;
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;
    const tipo = document.getElementById("tipo").value;

    if(nome.length>0 && data_nasc.length>0 && email.length>0 && senha.length>0 && tipo.length>0){

    const data = {'nome' : nome, 'data_nasc' : data_nasc, 'email' : email, 'senha' : senha, 'tipo' : tipo};
    try{
        fetch(baseUrl + "addUser.php",{
        method:'POST',
        headers: {'Content-Type' : 'application/json'},
        body:JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if(data.success){
                alert(data.message);
                document.getElementById("nome").value = "";
                document.getElementById("data_nasc").value = "";
                document.getElementById("email").value = "";
                document.getElementById("senha").value = "";
                document.getElementById("tipo").value = "";

                window.location.href = "login.php";
            }else{
                alert(data.message);

            }
        })
    }catch(erro){
        console.error("Erro ao criar a conta", erro.message);

        alert("Erro ao criar a sua conta");
    }
    }else{
        //console.error("Erro ao criar a conta", erro.message);

        alert("Erro ao criar a sua conta: preencha todos os campos");
    }

}
console.log("olá");
document.getElementById("btnAdd").addEventListener("click", addUser);