@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1>Listagem dos Clientes
    (<a href="{{ route('users.create')}}">+</a>)
</h1>

<form action="{{route('users.index')}}" method="get">
    <input type="text" name="search" placeholder="pesquisar">
    <button>Pesquisar</button>
</form>

<ul class="collection">
    @foreach ($users as $user)
        <li class="collection-item avatar">
            <h6>Nome: {{ $user->name }}</h6>
            <h6>Email: {{ $user->email }}</h6>
            <h6>CPF: {{ $user->cpf }}</h6>
            <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            <a href="{{ route('users.delete', $user->id) }}">Deletar</a>           
            <a href="{{ route('pedidos.index', $user->id) }}">Pedidos</a>
        </li>
        
    @endforeach
</ul>
@endsection