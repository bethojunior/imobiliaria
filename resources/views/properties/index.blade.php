@extends('layouts.page')

@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">
        Imóveis
    </h1>
@stop

@section('content')
    @include('includes.alerts')
    <div class="row col-lg-12">
        @foreach($properties as $property)
            <div class="row col-lg-12 card">
                <p>Titulo : {{ $property->title }}</p>
                <p>Sub Titulo : {{ $property->sub_title }}</p>
                <p>Valor: {{ $property->value }}</p>
                <p>Valor Adicional: {{ $property->value_additional }}</p>
                <p>Criado: {{ Carbon\Carbon::parse($property->created_at )->format('d/m/Y') }}</p>
                <p>Cidade : {{ $property->city['0']['name'] }}</p>
                <p>Bairro : {{ $property->neighborhood['0']['name'] }}</p>
                <p>Tipo : {{ $property->acquisition['0']['name'] }}</p>
                <p>Modelo : {{ $property->model['0']['name'] }}</p>
                <p>Endereço : {{ $property->address }}</p>
                <div class="accordion" id="accordionExample">
                    @foreach($property->images as $images)
                        <div class="card">
                            <div class="card-header" id="headingThree{{$images->id}}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseThree{{$images->id}}" aria-expanded="false" aria-controls="collapseThree{{$images->id}}">
                                        Imagem {{ $images->id }}
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree{{$images->id}}" class="collapse" aria-labelledby="headingThree{{$images->id}}" data-parent="#accordionExample">
                                <div class="card-body">
                                    <img src="{{ url('storage/').'/'.$images->image }}" >
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>


@stop

@section('js')

    <script src="{{ asset('js/modules/properties/create.js') }}"></script>
@endsection




