
@extends('layouts.page')

@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">
        Inserir Imóveis
    </h1>
@stop

@section('content')
    @include('includes.alerts')
    <form class="row col-lg-12" method="POST" action="{{ route('properties.create')}}">
        @csrf
        <div class="form-group col-lg-3">
            <span>Cidade</span>
            <select class="js-example-basic-single form-control" id="city" name="city_id">
                <option>-- Selecione --</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-3">
            <span id="value-neighborhoods" data="{{ $neighborhoods }}">Bairros</span>
            <select class="js-example-basic-single form-control" id="neighborhood" name="neighborhood_id">

            </select>
        </div>

{{--        <div class="form-group">--}}
{{--            <span>&nbsp;</span>--}}
{{--            <input type="submit" value="Salvar" class="btn btn-info form-control">--}}
{{--        </div>--}}
    </form>

@stop

@section('js')
    <script src="{{ asset('js/modules/properties/create.js') }}"></script>
@endsection
