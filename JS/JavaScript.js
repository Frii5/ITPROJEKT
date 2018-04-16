$(document).ready(function(){
    $('.collapsible').collapsible();
    $('.parallax').parallax();
    $('input#first_name').characterCounter();
    $('select').formSelect();

  });

var elem = document.querySelector('.collapsible.expandable');
var instance = M.Collapsible.init(elem, {
  accordion: false
});

