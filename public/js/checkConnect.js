function checkConnectOnSend(){
  var form = document.querySelector('#formConnect');

  form.addEventListener("submit", function(event){
    var mail = document.querySelector('#mailConnect');
    var pwd = document.querySelector('#passwordConnect');
    document.querySelector('#passwordError').innerHTML = "";
    document.querySelector('#mailError').innerHTML = "";

//If field are empty, then
    if(mail.value == "" || pwd.value == ""){
      if(mail.value == ""){
        document.querySelector('#mailError').innerHTML = "Veuillez entrer votre identifiant";
      }
      if(pwd.value == ""){
        document.querySelector('#passwordError').innerHTML = "Veuillez entrer votre mot de passe";
      }

    }else{
      //If fields are not empty, try to connect the user via ajax with form data.
      var data = new FormData();
      data.append('login', mail.value);
      data.append('password', pwd.value);
      connectAjax(data);
    }
    event.preventDefault();
  });

}

function connectAjax($data){
  document.querySelector('#mailError').innerHTML = "";
  document.querySelector('#passwordError').innerHTML = "";
  var submitButton =document.querySelector('#submitButton');

  //Loading for low connexion, "Log In" button is disabled.
  submitButton.classList.add('disabled');
  submitButton.disabled = true;
  submitButton.innerHTML = '<i class="fa fa-cog fa-spin" style="font-size:20px"></i>';

  var xhr = getHttpRequest();
  //Takes  Id's and send them in the POST request.
  xhr.open('POST', path+'/user/connect/ajax', true);

  // We send a header to tell the server its an Ajax request
  xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest');
  xhr.send($data);

  //Check if request is OK
  xhr.onreadystatechange = function () {

    //Request is done sending
    if (xhr.readyState === 4) {
      //Request is ok
      if (xhr.status === 200) {
        if(xhr.responseText == 1){
          document.querySelector('#passwordError').innerHTML = "Connexion reussie, veuillez patienter";
          document.location.href= window.location.origin+''+window.location.pathname+'user/profile'
        }else{
          document.querySelector('#passwordError').innerHTML = "dentifiants incorrects, veuillez réesayer";
        }
      } else { //Not OK

        document.querySelector('#passwordError').innerHTML = "Impossible d'atteindre la base de donnée, un problème de connexion ?";
      }

    }
    //remove loading button
    submitButton.classList.remove('disabled');
    submitButton.disabled = false;
    submitButton.innerHTML = 'Se Connecter';
  }
}

function checkSignupOnSend(){
  repwd.addEventListener("keyup", function(event){
    var pwd = document.querySelector('#pwd');
    var repwd = document.querySelector('#repwd');
    //If passwords don't match
    if(pwd.value != repwd.value){
        document.querySelector('#pwdError').style.display="initial";
    }else{
        document.querySelector('#pwdError').style.display="none";
    }
  });
}
