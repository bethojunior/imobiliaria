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
        <div class="accordion col-lg-12" id="accordionExample">
            @foreach($properties as $property)
                <div class="row col-lg-12 card">
                    <div class="card-header" id="heading{{$property->id}}">
                        <div class="row col-lg-12">
                            <div class="col-lg-8">
                                <button class="btn btn-link btn-block text-left " type="button" data-toggle="collapse" data-target="#collapse{{$property->id}}" aria-expanded="false" aria-controls="collapse{{$property->id}}">
                                    {{ $property->title }} - {{ $property->city['0']['name'] }}  -  Criado: {{ Carbon\Carbon::parse($property->created_at )->format('d/m/Y') }}
                                </button>
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-danger disable-property" id="{{$property->id}}">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="collapse{{$property->id}}" class="collapse" aria-labelledby="heading{{$property->id}}" data-parent="#accordionExample">
                        <div class="card-body row col-lg-12">
                            <div class="form-group col-lg-2">
                                <span>Titulo</span>
                                <input class="form-control" type="text" disabled value="{{ $property->title }}">
                            </div>
                            <div class="form-group col-lg-2">
                                <span>Sub Titulo</span>
                                <input class="form-control" type="text" disabled value="{{ $property->sub_title }}">
                            </div>
                            <div class="form-group col-lg-2">
                                <span>Valor</span>
                                <input class="form-control" type="text" disabled value="R$ {{ $property->value }}">
                            </div>
                            <div class="form-group col-lg-2">
                                <span>Valor adicional</span>
                                <input class="form-control" type="text" disabled value="R$ {{ $property->value_additional }}">
                            </div>
                            <div class="form-group col-lg-2">
                                <span>Criado</span>
                                <input class="form-control" type="text" disabled value="{{ Carbon\Carbon::parse($property->created_at )->format('d/m/Y') }}">
                            </div>
                            <div class="form-group col-lg-2">
                                <span>Cidade</span>
                                <input class="form-control" type="text" disabled value="{{ $property->city['0']['name'] }}">
                            </div>
                            <div class="form-group col-lg-2">
                                <span>Bairro</span>
                                <input class="form-control" type="text" disabled value="{{ $property->neighborhood['0']['name'] }}">
                            </div>
                            <div class="form-group col-lg-2">
                                <span>Tipo</span>
                                <input class="form-control" type="text" disabled value="{{ $property->acquisition['0']['name'] }}">
                            </div>
                            <div class="form-group col-lg-2">
                                <span>Modelo</span>
                                <input class="form-control" type="text" disabled value="{{ $property->model['0']['name'] }}">
                            </div>
                            <div class="form-group col-lg-3">
                                <span>Endereço</span>
                                <input class="form-control" type="text" disabled value="{{ $property->address}}">
                            </div>
                            <div class="col-lg-12">
                                <span>Localização</span>
                                <iframe style="height: 20vw" class="form-control" src="{{ $property->location }}"></iframe>
                            </div>
                            <div class="row col-lg-12 form-group" style="padding-top: 1vw">
                                @foreach($property->images as $images)
                                    <div class="card col-lg-2">
                                        <img src="{{ asset('storage/').'/'.$images->image }}" class="card-img-top" alt="...">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>


@stop

@section('js')

    <script src="{{ asset('js/controllers/Property/PropertyController.js') }}"></script>
    <script src="{{ asset('js/modules/properties/create.js') }}"></script>
@endsection




