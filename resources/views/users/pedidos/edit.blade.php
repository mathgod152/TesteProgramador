@extends('layouts.app')

@section('title', "Editar o Pedido {{ $pedido->id }} de {{ $user->name }}")

@section('content')
<h1>Editar o Pedido {{ $pedido->id }} de {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('pedidos.update', $pedidos->id) }}" method="post">
    @method('PUT')
    @include('users.pedidos._partials.form')
</form>
@endsection