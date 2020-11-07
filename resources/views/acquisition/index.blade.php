@extends('layouts.page')

@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">
        Tipos de venda
    </h1>
@stop

@section('content')
    @include('includes.alerts')
    <form class="row col-lg-12" method="POST" action="{{ route('acquisition.create')}}">
        @csrf
        <div class="form-group">
            <span>Nome</span>
            <input name="name" class="form-control">
        </div>
        <div class="form-group" style="margin-left: 1vw">
            <span>&nbsp;</span>
            <input type="submit" value="Salvar" class="btn btn-info form-control">
        </div>
    </form>

    <div class="row col-lg-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Tipos de venda</th>
            </tr>
            </thead>
            <tbody>
            @foreach($acquisitions as $acquisition)
                <tr>
                    <td>{{ $acquisition->name }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>
@stop

@section('js')
    <script src="{{ asset('js/modules/cashier/init.js') }}"></script>
@endsection
