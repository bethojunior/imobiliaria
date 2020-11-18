class PropertyController extends ConnectionServer{
    static delete(id)
    {
        return new Promise(resolve => {
            this.sendRequest('properties/'+id,'DELETE',null,resolve,true)
        })
    }
}
