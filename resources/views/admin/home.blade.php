@extends('layouts.app')

@section('title', 'Administratorius')

@section('content')
    <h1>Administratoriaus posistemis</h1>

    <ul>
        <li><a href="{{ route('admin.users') }}">Naudotojų valdymas</a></li>
        <li><a href="{{ route('admin.conferences') }}">Konferencijų valdymas</a></li>
    </ul>
@endsection
