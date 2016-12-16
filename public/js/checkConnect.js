function checkConnectOnSend(){
  var form = document.querySelector('#formConnect');

  form.addEventListener("submit", function(event){
    var mail = document.querySelector('#mailConnect');
    var pwd = document.querySelector('#passwordConnect');
    document.querySelector('#passwordError').innerHTML = "";
    document.querySelector('#mailError').innerHTML = "";


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

  //Loading for low connexion
  submitButton.classList.add('disabled');
  submitButton.disabled = true;
  submitButton.innerHTML = '<i class="fa fa-cog fa-spin" style="font-size:20px"></i>';

  var xhr = getHttpRequest();
  //Récupère les ID, les envoient dans la requete en post.
  xhr.open('POST', window.location.origin+''+window.location.pathname+'user/connect/ajax', true);

  // On envoit un header pour indiquer au serveur que la page est appellée en Ajax
  xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest');
  // On lance la requête
  xhr.send($data);

//Check if request is OK
  xhr.onreadystatechange = function () {

    //OK
    //While waiting for the response field is disabled
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        if(xhr.responseText == 1){
          document.querySelector('#passwordError').innerHTML = "Connexion reussie, veuillez patienter";
          document.location.href= window.location.origin+''+window.location.pathname+'user/profile'
        }else{
          document.querySelector('#passwordError').innerHTML = "Indentifiants incorrects, veuillez réesayer";
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

/*
function checkMailOnKeyPressed(idChamp){
  var champ = document.querySelector(idChamp);
  champ.addEventListener("keypress", function(event, champ){
    var mailCheck = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    mailCheck.test(champ);
  });
}
*/
