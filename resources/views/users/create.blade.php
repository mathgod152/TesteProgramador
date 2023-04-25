@extends('layouts.app')

@section('title', 'Novo Usuários')

@section('content')
<h1>Novo Usuario</h1>

@include('includes.validations-form')

<form action="{{ route('users.store')}}" method="post">
    @csrf
    @include('users._partials.form')
</form>
@endsection