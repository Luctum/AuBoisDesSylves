function checkConnect(){
  var form = document.querySelector('#formConnect');
  form.addEventListener("submit", function(event){
    var mail = document.querySelector('#mailConnect');
    var pwd = document.querySelector('#passwordConnect');

    if(mail.value == "" || pwd.value == ""){
        mail.style.background = "red";
        event.preventDefault();
    }

  });
}
