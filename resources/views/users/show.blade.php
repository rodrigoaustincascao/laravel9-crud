@extends('layouts.app')

@section('title', "Descrição do usuário {{$user->name}}")

@section('content')

<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
</ul>
<form action="{{route('users.delete', $user->id)}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>
@endsection