
<div class="row col l12 s12 m12 filter">
    <div class="col l12 s12 m12">
        <p class="title-card">Filtros</p>
    </div>
    <div class="input-field col l2 s12 m12">
        <select>
            @foreach($models as $model)
                <option value="{{ $model->id }}">{{ $model->name }}</option>
            @endforeach
        </select>
        <label>Tipo</label>
    </div>
    <div class="input-field col l2 s12 m12">
        <select>
            @foreach($acquisitions as $acquisition)
                <option value="{{ $acquisition->id }}">{{ $acquisition->name }}</option>
            @endforeach
        </select>
        <label>Modelo</label>
    </div>
    <div class="input-field col l2 s12 m12">
        <select>
            @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
        <label>Cidade</label>
    </div>
    <div class="input-field col l2 s12 m12">
        <select>
            <option value="0">Escolha a cidade</option>
            @foreach($neighborhoods as $neighborhood)
                <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
            @endforeach
        </select>
        <label>Bairro</label>
    </div>
    <div class="input-field col l2 s12 m12">
        <select>
            <option value="1">Até R$100.000,00</option>
            <option value="2">R$100.000,00 à R$300.000,00</option>
            <option value="3">R$300.000,00 à R$500.000,00</option>
        </select>
        <label>Valor</label>
    </div>
    <div class="input-field col l2 s12 m12">
        <button class=" col l12 s12 m12 btn btn-info">Aplicar</button>
    </div>
</div>


<div class="row">

    @foreach( $properties as $property )
        @foreach( $acquisitions as $acquisition )
            @if($acquisition->id == $property->acquisition_id)
                <div class="col l12 s12 m12 type-sale">
                    <div class="center">
                        <h4 class="main-color">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                {{ $acquisition->name }}
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </h4>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <div class="slider">
                                <ul class="slides">
                                    @foreach($property->images as $images)
                                        <li>
                                            <img src="{{ asset('storage/').'/'.$images->image }}"> <!-- random image -->
                                            <div class="caption center-align">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <a class="btn-floating halfway-fab waves-effect waves-light red modal-sales"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">{{ $property->title }}</span>
                            <label>{{ $property->sub_title }}</label>
                            <p>
                                {{ $property->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endforeach
</div>


<div id="modal-sale" class="modal bottom-sheet">
    <div class="modal-content">
        <div class="row col l12 s12">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="https://cdn.vistahost.com.br/canuto6551/vista.imobi/fotos/110/i59E1PO_11059d53be3bc927.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="https://cdn.vistahost.com.br/canuto6551/vista.imobi/fotos/110/i59E1PO_11059d53be619808.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="https://cdn.vistahost.com.br/canuto6551/vista.imobi/fotos/110/i59E1PO_11059d53be510a6f.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="https://cdn.vistahost.com.br/canuto6551/vista.imobi/fotos/110/i59E1PO_11059d53be85eb63.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <h4>Titulo</h4>
        <p>Conteudo</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
</div>
