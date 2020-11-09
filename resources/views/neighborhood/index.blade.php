@extends('layouts.page')

@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">
        Bairros
    </h1>
@stop

@section('content')
    @include('includes.alerts')
    <form class="row col-lg-12" method="POST" action="{{ route('neighborhood.create')}}">
        @csrf
        <div class="form-group col-lg-3">
            <span>Cidade</span>
            <select class="form-control" name="city_id" id="">
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-3">
            <span>Bairro</span>
            <input name="name" class="form-control">
        </div>
        <div class="form-group col-lg-2">
            <span>&nbsp;</span>
            <input type="submit" value="Salvar" class="btn btn-info form-control">
        </div>
    </form>

    <div class="row col-lg-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Cidade</th>
                <th scope="col">Bairro</th>
            </tr>
            </thead>
            <tbody>
            @foreach($neighborhoods as $neighborhood)
                <tr>
                    <td>{{ $neighborhood->city[0]['name'] }}</td>
                    <td>{{ $neighborhood->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@stop

@section('js')
    <script src="{{ asset('js/modules/cashier/init.js') }}"></script>
@endsection
