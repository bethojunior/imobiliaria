@extends('layouts.page')

@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">
        Imóveis
    </h1>
@stop

@section('content')
    @include('includes.alerts')
    {{ $properties }}
    @foreach($properties as $property)
{{--        <iframe src="{{ $property->location }}"></iframe>--}}
    @endforeach
@stop

@section('js')
    <script src="{{ asset('js/modules/cashier/init.js') }}"></script>
@endsection
