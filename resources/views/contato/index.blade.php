<link href="{{ asset('css/contato/index.css') }}" rel="stylesheet">
<div class="row contact">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12 l4 m12">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Primeiro nome</label>
            </div>
            <div class="input-field col s12 l4 m12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Ultimo nome</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l4 m12 s12">
                <input id="phone" type="tel" class="validate">
                <label for="phone">Telefone</label>
            </div>
            <div class="input-field col l4 m12 s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button class="col s12 m12 l2 btn btn-success">
                    Enviar
                </button>
            </div>
        </div>
    </form>
</div>
