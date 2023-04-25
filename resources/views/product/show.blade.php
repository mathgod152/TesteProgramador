@extends('layouts.app')

@section('title', 'Listagem do  Usuários')

@section('content')
<h1>Listagem do Produto {{ $product->titulo_produto }} </h1>


<ul class="collection">
    <li >{{ $product->titulo_produto }}</li>
    <li>{{ $product->sku_produto}}</li>
    <li>{{ $product->preço}}</li>
</ul>

<form action="{{ route('products.delete', $product->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>

@endsection