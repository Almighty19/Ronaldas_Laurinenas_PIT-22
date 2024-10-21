@extends('layouts.app')

@section('title', 'Sukurti konferencija')

@section('content')
    <h1>Naujos konferencijos kurimo forma</h1>

    <form action="{{ route('admin.conference.store') }}" method="POST">
        @csrf

        <label for="title">Pavadinimas:</label>
        <input type="text" name="title" required>

        <label for="description">Aprašymas:</label>
        <textarea name="description" required></textarea>

        <label for="date">Data:</label>
        <input type="date" name="date" required>

        <label for="location">Vieta:</label>
        <input type="text" name="location" required>

        <button type="submit">Sukurti</button>
    </form>
@endsection
