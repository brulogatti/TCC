const baseUrl = "http://localhost/WEB/TCC/ws/";


function login(e){
    e.preventDefault();

    const form = document.querySelector("#formLogin");
    const data = new FormData(form);
    

    fetch(baseUrl + "ws_login.php",{ 
        method:'POST',
        body:data
        }
        )
        .then(response => response.json())
        .then(data => {            
            if(data.success){
                //alert(data.message);e
                document.getElementById("email").value = "";
                document.getElementById("senha").value = "";
                localStorage.setItem('id', data["id"]);
                localStorage.setItem('token', data["token"]);
                localStorage.setItem('tipo', data["tipo"]);

                if(data["tipo"] == "a"){
                    window.location.href = "home_admin.php";
                }else{
                    window.location.href = "home.php";
                }

            }else{
                alert(data.message);
            }
        }).catch(error => {
            console.log(error)
        });

}

document.getElementById("btnLogin").addEventListener("click",login);