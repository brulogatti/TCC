const baseUrl = "http://localhost/TCC/ws/";

function inserirCateg(e){
    e.preventDefault();
    const categoria = document.getElementById("categorias").value;
    const data = {'categorias' : categoria};

    
    try{
        fetch(baseUrl + "addCategoria.php",{
        method:'POST',
        headers: {'Content-Type' : 'application/json'},
        body:JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if(data.success){
                alert(data.message);
                document.getElementById("categorias").value = "";;
            }else{
                alert(data.message);
            }
        })
    }catch(erro){
        alert("Deu erro")
    }
}

document.getElementById("adicionar").addEventListener("click", inserirCateg);