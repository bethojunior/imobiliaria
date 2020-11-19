$(".dropdown-button").dropdown();
$(".button-collapse").sideNav();
$('.slider').slider();
$('.modal').modal();
$('select').material_select();

setInterval( () =>{ $('.slider').slider('next');} , 3500)

elementProperty.addEventInElement('.property','onclick',function (){
    let id = this.getAttribute('id');
    window.location.href = '/property/'+id;
})
