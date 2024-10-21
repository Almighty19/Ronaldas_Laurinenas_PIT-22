@extends('layouts.app')

@section('title', 'Redaguoti naudotoją')

@section('content')
    <h1>Redaguoti Klienta</h1>

    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Vardas:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

        <label for="surname">Pavardė:</label>
        <input type="text" name="surname" value="{{ old('surname', $user->surname) }}" required>

        <label for="email">El. paštas:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

        <button type="submit">Atnaujinti</button>
    </form>
@endsection
