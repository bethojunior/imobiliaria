$(".dropdown-button").dropdown();
$(".button-collapse").sideNav();
$('.slider').slider();
$('.modal').modal();

setInterval( () =>{ $('.slider').slider('next');} , 3500)

elementProperty.addEventInElement('.modal-sales','onclick',function (){
    $('#modal-sale').modal('open');
})
