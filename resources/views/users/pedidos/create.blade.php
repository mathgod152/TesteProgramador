@extends('layouts.app')

@section('title', 'Novo Usuários')

@section('content')
<h1>Novo Pedido Para {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('pedidos.store', $user->id)}}" method="post">
    @csrf
    @include('users.pedidos._partials.form')
</form>
@endsection