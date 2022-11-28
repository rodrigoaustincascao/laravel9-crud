@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<h1>Novo Usuário</h1>

@include('includes.validations-form')

<form action="{{route('users.store')}}" method="POST">
    @csrf
   @include('users.partials.form')
</form>
@endsection