function paginationStyle(){
  var pagination = document.querySelector('.pagination');
  /* First , make the active page (nbOne) grey */
  var active = document.querySelector('.active');
  var page = active.querySelector('.page');
  page.style.background = "grey";
  page.style.color = "white";

  /* Then change with the user current location*/
  pagination.onclick = function(event) {
    var active = document.querySelector('.active');
    var page = active.querySelector('.page');
    page.style.background = "grey";
    page.style.color = "white";
  }
}
