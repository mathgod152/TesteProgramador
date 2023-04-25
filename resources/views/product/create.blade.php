@extends('layouts.app')

@section('title', 'Novo Usuários')

@section('content')
<h1>Novo Produto</h1>

@include('includes.validations-form')

<form action="{{ route('products.store')}}" method="post">
    @csrf
    @include('product._partials.form')
</form>
@endsection