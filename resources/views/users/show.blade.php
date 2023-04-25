@extends('layouts.app')

@section('title', 'Listagem do  Usuários')

@section('content')
<h1>Listagem do Cliente {{ $user->name }} </h1>


<ul class="collection">
    <li >{{ $user->name }}</li>
    <li>{{ $user->email}}</li>
    <li>{{ $user->cpf}}</li>
</ul>

<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>

@endsection