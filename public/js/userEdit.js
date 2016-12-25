function checkPasswordModify(){
  var check = document.querySelector("#wantToEdit");
  check.addEventListener("change", function(){
    var oldPassword = document.querySelector('#oldPassword');
    var newPassword1 = document.querySelector('#newPassword1');
    var newPassword2 = document.querySelector('#newPassword2');
    if(check.checked == true){
      oldPassword.disabled = false;
      newPassword1.disabled = false;
      newPassword2.disabled = false;
    }else{
      oldPassword.disabled = true;
      newPassword1.disabled = true;
      newPassword2.disabled = true;
    }
  });
}
