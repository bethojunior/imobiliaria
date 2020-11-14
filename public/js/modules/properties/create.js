$('.js-example-basic-single').select2();
Mask.setMoneyField('.value')
$('.collapse').collapse({
    toggle: false
})
$('.carousel').carousel()

elementProperty.addEventInElement('#city','onchange',function (){
    let city_id = this.value;
    swal('Selecione um bairro');
    elementProperty.getElement('#value-neighborhoods',that =>{
        let data_neighborhoods = JSON.parse(that.getAttribute('data'));
        let neighborhoods = [];
        data_neighborhoods.map(item => {
            if(item.city_id == city_id)
                neighborhoods.push(item);
        })
        elementProperty.getElement('#neighborhood',these => {
            let content;
            content += neighborhoods.map(item => {
                return `
                    <option value="${item.id}">${item.name}</option>
                `;
            }).join('');
            these.innerHTML = content;
        });return swal('Erro ao deletar alert(id); imóvel','Contate o suporte','error');
    })
})

elementProperty.addEventInElement('.disable-property','onclick',function (){
    let id = this.getAttribute('id');
    SwalCustom.dialogConfirm('Deseja deletar esse imovel?','Essa ação é irreversivel',status => {
        if(!status)
            return true;
        PropertyController.delete(id).then(response => {
            if(response.status)
                return swal('Imóvel deletado com sucesso','','success');
            return swal('Erro ao deletar alert(id); imóvel','Contate o suporte','error');
        })
    })
})
