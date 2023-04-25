@extends('layouts.app')

@section('title', 'Listagem dos Pedidos')

@section('content')
<h1>Listagem dos Pedidos
    (<a href="{{ route('pedidos.create', $user->id) }}">+</a>)
</h1>

<form action="{{ route('pedidos.index', $user->id) }}" method="get">
    <input type="text" name="search" placeholder="pesquisar">
    <button>Pesquisar</button>
</form>

<ul class="collection">
            @foreach ($pedidos as $pedido)
                    <li>
                        <h6>Numero do Cliente: {{ $pedido->user_id }}</h6>
                        <h6>Numero do pedido: {{ $pedido->id }}</h6>
                        <h6>Codigo do produto {{ $pedido->products_id }}</h6>
                        <h6>Quantidade:{{ $pedido->quantidade }}</h6>
                        <h6>Status:{{ $pedido->status_produto }}</h6>
                    </li>
            <a href="{{ route('pedidos.edit', ['user' => $user->id, 'id' => $pedido->id] )}}">Editar</a>
            <form action="{{ route('pedidos.delete', $user->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Deletar</button>
            </form>
            @endforeach
</ul>
@endsection