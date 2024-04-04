function getMessage(x){
  switch(x){
      case "erroCep": return "O CEP deve ter pelo menos 8 caracteres";
      case "erroNome": return "O nome deve ter pelo menos 3 caracteres";
      case "erroDia": return "O dia deve estar entre 1 e 31";
      case "erroMes": return "O mês deve estar entre 1 e 12";
      case "erroAno": return "O ano deve estar entre 1900 e 2023";
      case "errTamSenha": return "Senha deve ter pelo menos 8 caracteres";
      case "errMaiuscula": return "A senha deve ter pelo menos 1 letra maiuscula";
      case "errMinuscula": return "A senha deve ter pelo menos 1 letra minuscula";
      case "errDigito": return "A senha deve ter pelo menos 1 numero";
      case "errEspecial": return "A senha deve ter pelo menos 1 caractere especial (ex: @,$,&)";
      case "errEmail": return "Endereço de email inválido";
      case "erroFevereiro": return "Data inválida!";
      case "erroFevereiro2": return "Data inválida!";
      
  }
}

function maskNome(){
  let txtNome = document.getElementById("nome").value;
  let tmpNome = ""
  

  for(let i = 0; i < txtNome.length; i++){
       if(!isDigit(txtNome[i])){
           tmpNome = tmpNome + txtNome[i];
       }
  }

  document.getElementById("nome").value = tmpNome;
}

function isDigit(x){
   return !isNaN(parseInt(x));
}

function checkNome(){
   let txtNome = document.getElementById("nome").value;
   let errNome = document.getElementById("errNome");

   if(txtNome.length < 3){
       errNome.textContent = getMessage("erroNome");
   }else{
       errNome.textContent = "";
   }
}

function maskData(){
  let txtDataNasc = document.getElementById("data_nasc").value;
  let tmpData = "";

  for(let i = 0; i < txtDataNasc.length;i++){
      if(isDigit(txtDataNasc[i])){
          tmpData = tmpData + txtDataNasc[i]
      }
  }

  if(tmpData.length > 2){
      tmpData = tmpData.substring(0,2) + "/" + tmpData.substring(2);
  }


  if(tmpData.length > 5){
      tmpData = tmpData.substring(0,5) + "/" + tmpData.substring(5);
  }

  document.getElementById("data_nasc").value = tmpData
}

function checkData(){
  let dataNasc = document.getElementById("data_nasc").value;
  let errNasc = document.getElementById("errDataNasc");

  let dia = parseInt(dataNasc.substring(0,2));
  let mes = parseInt(dataNasc.substring(3,5));
  let ano = parseInt(dataNasc.substring(6));

  if(!(dia >=1 && dia <= 31)){
      errNasc.textContent = getMessage("erroDia");
      return;
  }

  if(!(mes >=1 && mes <= 12)){
      errNasc.textContent = getMessage("erroMes");
      return;
  }


  if(!(ano >=1900 && ano <= 2023)){
      errNasc.textContent = getMessage("erroAno");
      return;
  }
  if (ano % 2 == 0) {
      if((mes == 2 && dia > 29)){
          errNasc.textContent = getMessage("erroFevereiro");
          return;
      }
  }else{
      if((mes == 2 && dia > 28)){
          errNasc.textContent = getMessage("erroFevereiro2");
          return;
      }
  }

  errNasc.textContent = "";
}

function isMaiuscula(x){
  if(x >= 'A' && x<='Z'){
      return true;
  }
  return false;
}

function isMinuscula(x){
  if(x >= 'a' && x<='z'){
      return true;
  }
  return false;
}

function checkSenha(){
  let txtSenha = document.getElementById("senha").value;
  let errSenha = document.getElementById("errSenha");
  
  let temMinuscula = false;
  let temMaiuscula = false;
  let temDigito = false;
  let temEspecial = false;

  if(txtSenha.length < 8){
      errSenha.textContent = getMessage("errTamSenha");
      return;
  }

  for(let i = 0; i < txtSenha.length; i++){
      if(isMaiuscula(txtSenha[i])){
          temMaiuscula = true;
      }

      if(isMinuscula(txtSenha[i])){
          temMinuscula = true;
      }

      if(isDigit(txtSenha[i])){
          temDigito = true;
      }

      if(!isMaiuscula(txtSenha[i]) && !isMinuscula(txtSenha[i]) && !isDigit(txtSenha[i])){
          temEspecial = true;
      }
  }

  if(!temMaiuscula){
      errSenha.textContent = getMessage("errMaiuscula");
      return;
  }

  if(!temMinuscula){
      errSenha.textContent = getMessage("errMinuscula");
      return;
  }

  if(!temDigito){
      errSenha.textContent = getMessage("errDigito");
      return;
  }

  if(!temEspecial){
      errSenha.textContent = getMessage("errEspecial");
      return;
  }

  errSenha.textContent = "";
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

document.getElementById("nome").addEventListener("input", maskNome);
document.getElementById("nome").addEventListener("blur", checkNome);
document.getElementById("data_nasc").addEventListener("input", maskData);
document.getElementById("data_nasc").addEventListener("blur", checkData);
document.getElementById("email").addEventListener("blur", checkEmail);
document.getElementById("senha").addEventListener("blur", checkSenha);
