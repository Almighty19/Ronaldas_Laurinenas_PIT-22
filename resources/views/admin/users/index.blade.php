@extends('layouts.app')

@section('title', 'Naudotojų sąrašas')

@section('content')
    <h1>Klientai</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if($users->isEmpty())
        <p>Šiuo metu nėra klientu...</p>
    @else
        <ul>
            @foreach($users as $user)
                <li>
                    {{ $user->name }} {{ $user->surname }} ({{ $user->email }})
                    <a href="{{ route('admin.user.edit', $user->id) }}">Redaguoti</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection

