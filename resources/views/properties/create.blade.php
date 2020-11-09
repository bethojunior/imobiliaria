
@extends('layouts.page')

@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">
        Inserir Imóveis
    </h1>
@stop

@section('content')
    @include('includes.alerts')
    <form class="row col-lg-12" method="POST" action="{{ route('properties.create')}}" enctype="multipart/form-data">
        @csrf
        <div class="row col-lg-12">
            <div class="form-group col-lg-2">
                <span>Modelo</span>
                <select required class="js-example-basic-single form-control" name="model_id">
                    <option></option>
                    @foreach($models as $model)
                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-2">
                <span>Tipo de venda</span>
                <select required class="js-example-basic-single form-control" name="acquisition_id">
                    <option></option>
                    @foreach($acquisitions as $acquisition)
                        <option value="{{ $acquisition->id }}">{{ $acquisition->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-2">
                <span>Cidade</span>
                <select required class="js-example-basic-single form-control" id="city" name="city_id">
                    <option> </option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-2">
                <span id="value-neighborhoods" data="{{ $neighborhoods }}">Bairro</span>
                <select class="js-example-basic-single form-control" id="neighborhood" name="neighborhood_id">
                    <option selected ></option>
                </select>
            </div>
        </div>
        <div class="row col-lg-12">
            <div class="form-group col-lg-4">
                <span>Endereço</span>
                <input required class="form-control" name="address">
            </div>
            <div class="form-group col-lg-4">
                <span>Localização</span>
                <input required class="form-control" name="location">
            </div>
        </div>
        <div class="row col-lg-12">
            <div class="form-group col-lg-2">
                <span>Valor</span>
                <input required class="form-control value" name="value">
            </div>
            <div class="form-group col-lg-2">
                <span>Valor adicional</span>
                <input required class="form-control value" name="value_additional">
            </div>
        </div>
        <div class="row col-lg-12">
            <div class="form-group col-lg-3">
                <span>Titulo</span>
                <input required class="form-control" name="title">
            </div>
            <div class="form-group col-lg-3">
                <span>Breve descrição</span>
                <input required class="form-control" name="sub_title">
            </div>
        </div>
        <div class="row col-lg-12">
            <div class="form-group col-lg-12">
                <span>Descrição</span>
                <textarea required style="height: 15vw" class="form-control" name="description"></textarea>
            </div>
        </div>

        <div class=" col-lg-12">
            <input required id="input-b3" name="images[]" type="file" class="file" multiple
                   data-show-upload="false" data-show-caption="true" data-msg-placeholder="Selecione imagens para upload">
        </div>

        <div class="form-group col-lg-2">
            <span>&nbsp;</span>
            <input type="submit" value="Salvar" class="btn btn-info form-control">
        </div>
    </form>

@stop

@section('js')

    <script src="{{ asset('js/modules/properties/create.js') }}"></script>
@endsection
