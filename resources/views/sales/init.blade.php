



<div class="row col l12 m12 s12 cotainer">
    <div class="row col l8 s12 m12">
        @foreach( $properties as $property )
            <div class="col s12 m12 l6 property" id="{{ $property->id }}">
                    <div class="card">
                        <div class="card-image">
                            <div class="slider">
                                <ul class="slides">
                                    @foreach($property->images as $images)
                                        <li>
                                            <img src="{{ asset('storage/').'/'.$images->image }}">
                                            <div class="caption center-align">

                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <a class="btn-floating halfway-fab waves-effect waves-light red modal-sales property" id="{{ $property->id }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="card-content">
                            <p class="card-title">{{ $property->title }}</p>
                            <p><span><i class="material-icons Tiny">location_on</i> {{ $property->address }}</span></p>
                            <b><p><span>R$ {{ $property->value }}</span></p></b>
{{--                            <p><label>{{ $property->sub_title }}</label>    </p>--}}
                            <div class="col l12 m12 s12 p15">
                                <div class="divider"></div>
                            </div>
                            <p>
                                {{ $property->description }}
                            </p>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    <form class="row col l4 s12 m12 filter" method="POST" action="{{ route('property.search') }}">
        @csrf
        <div class="col l12 s12 m12">
            <b><p class="title-card">Filtro de imóvel</p></b>
        </div>
        <div class="input-field col l12 s12 m12">
            <select name="model_id">
                @foreach($models as $model)
                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                @endforeach
            </select>
            <label>Tipo</label>
        </div>
        <div class="input-field col l12 s12 m12">
            <select name="acquisition_id">
                @foreach($acquisitions as $acquisition)
                    <option value="{{ $acquisition->id }}">{{ $acquisition->name }}</option>
                @endforeach
            </select>
            <label>Modelo</label>
        </div>
        <div class="input-field col l12 s12 m12">
            <select name="city_id">
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            <label>Cidade</label>
        </div>
        <div class="input-field col l12 s12 m12">
            <select name="neighborhood_id">
                @foreach($neighborhoods as $neighborhood)
                    <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
                @endforeach
            </select>
            <label>Bairro</label>
        </div>
{{--        <div class="input-field col l12 s12 m12">--}}
{{--            <select name="value">--}}
{{--                <option value="1">Até R$100.000,00</option>--}}
{{--                <option value="2">R$100.000,00 à R$300.000,00</option>--}}
{{--                <option value="3">R$300.000,00 à R$500.000,00</option>--}}
{{--            </select>--}}
{{--            <label>Valor</label>--}}
{{--        </div>--}}
        <div class="input-field col l12 s12 m12">
            <button type="submit" style="position: relative" class=" col l12 s12 m12 btn btn-info">Buscar &nbsp;&nbsp;&nbsp;
                <i style="position: absolute" class="material-icons Tyni">search</i>
            </button>
        </div>
    </form>
</div>



