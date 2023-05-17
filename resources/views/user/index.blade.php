@extends('base')

@section('title', 'Usuários')

@section('content')
<p>pagina de usuarios</p>

<a href="{{ route('user.create') }}" class="">adicionar usuario</a>
@endsection