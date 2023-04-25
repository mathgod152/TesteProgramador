@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1>Listagem dos Produtos
    (<a href="{{ route('products.create')}}">+</a>)
</h1>

<form action="{{route('products.index')}}" method="get">
    <input type="text" name="search" placeholder="pesquisar">
    <button>Pesquisar</button>
</form>

<ul class="collection">
    @foreach ($products as $product)
        <li class="collection-item avatar">
            <h6>Nome: {{ $product->titulo_produto }}</h6>
            <h6>SKU: {{ $product->sku_produto }}</h6>
            <h6>Preço: R${{ $product->preço}}</h6>
            <a href="{{ route('products.edit', $product->id) }}">Editar</a>
            <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
            <a href="{{ route('products.delete', $product->id) }}">Deletar</a>
        </li>
        
    @endforeach
</ul>
@endsection