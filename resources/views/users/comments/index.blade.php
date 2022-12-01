@extends('layouts.app')

@section('title', "Comentários do Usuários {$user->name}")

@section('content')
<h1>
    Comentários do Usuários {{$user->name}}
    <a href="{{route('users.create')}}">+</a>
</h1>

<form action="{{route('users.index')}}" method="GET">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>
<ul>
    @foreach($comments as $comment)
        <li>
            {{$user->name}} 
            -
            {{$user->email}}
            <a href="{{route('users.show', $user->id)}}"> | Detalhes</a>
            <a href="{{route('users.edit', $user->id)}}"> | Editar</a>
        </li>
    @endforeach
</ul>
@endsection