elementProperty.addEventInElement('#city','onchange',function (){
    let city_id = this.value;
    elementProperty.getElement('#value-neighborhoods',that =>{
        let data_neighborhoods = JSON.parse(that.getAttribute('data'));
        let neighborhoods = [];
        data_neighborhoods.map(item => {
            if(item.city_id == city_id){
                neighborhoods.push(item);
            }

        })
        elementProperty.getElement('#neighborhood',these => {
            let content;
            content += neighborhoods.map(item => {
                return `
                    <option value="${item.id}">${item.name}</option>
                `;
            }).join('');
            these.innerHTML = content;
        });
    })
})
