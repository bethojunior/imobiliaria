<link href="{{ asset('css/contact/index.css') }}" rel="stylesheet">
<div class="row contactus">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Primeiro nome</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Ultimo nome</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s6">
                <input id="fone" type="tel" class="validate">
                <label for="fone">Telefone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="about" type="text" class="validate">
                <label for="about">Motivo</label>
            </div>
        </div>

        <div class="col s12 l3">
            <button class="btn col s12 l3">Enviar</button>
        </div>
    </form>
</div>
