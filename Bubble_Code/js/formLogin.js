function getMessage(x){
    switch(x){
        case "errEmail": return "Forma de email inválida";
    
        
    }
}

function isValidEmail(x) {
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(x);
  }

function checkEmail() {
    let txtEmail = document.getElementById("email").value;
    let errEmail = document.getElementById("errEmail");

    if (!isValidEmail(txtEmail)) {
       errEmail.textContent = getMessage("errEmail");
    } else {
        errEmail.textContent = "";
    }
}




document.getElementById("email").addEventListener("blur", checkEmail);
