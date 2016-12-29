function getIdProductOnClick(){
  var editButtons= document.querySelectorAll("[data-id-product]");
  var i;

  for (i = 0; i < editButtons.length; ++i) {
    let editButton = editButtons[ i ];
    editButton.addEventListener('click', function(e){
      productAutoFill(e.target.dataset.idProduct);
    });
  }

}

function productCleanFields(){
  var newButton = document.querySelector('#createButton');
  newButton.addEventListener('click', function(event){
    document.getElementById('idForm').value = "";
    document.getElementById('nameForm').value = "";
    document.getElementById('descriptionForm').value = null;
    document.getElementById('catNull').selected = true;
    document.getElementById('avail0').selected = true;
    document.getElementById('iconForm').value = "";
    document.getElementById('priceForm').value = "";
  });
}

function productAutoFill(id){
    console.log(id);

    var xhr = getHttpRequest();
    //Takes  Id and send them in the GET request.
    xhr.open('GET', path+'/admin/products/one/'+id, true);

    // On envoit un header pour indiquer au serveur que la page est appellée en Ajax
    xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest');
    xhr.send();

    //Check if request is OK
    xhr.onreadystatechange = function () {

      //Request is done sending
      if (xhr.readyState === 4) {
        //Request is ok
        if (xhr.status === 200) {
          var response =  JSON.parse(xhr.responseText);
          document.getElementById('idForm').value = response.Id;
          document.getElementById('nameForm').value = response.Name;
          document.getElementById('descriptionForm').value = response.Description;
          document.getElementById('cat'+response.IdCategory).selected = true;
          document.getElementById('iconForm').value = response.Icon;
          document.getElementById('avail'+response.Availability).selected = true;
          document.getElementById('priceForm').value = response.Price;

        } else { //Not OK
          console.log('Impossible d\'atteindre la base de donnée, un problème de connexion ?');
        }
      }
    }
}
