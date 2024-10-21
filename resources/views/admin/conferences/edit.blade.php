@extends('layouts.app')

@section('title', 'Redaguoti konferenciją')

@section('content')
    <h1>Redaguoti konferenciją</h1>

    <form action="{{ route('admin.conference.update', $conference->id) }}" method="POST">
        @csrf
        @method('POST')

        <label for="title">Pavadinimas:</label>
        <input type="text" name="title" value="{{ old('title', $conference->title) }}" required>

        <label for="description">Aprašymas:</label>
        <textarea name="description" required>{{ old('description', $conference->description) }}</textarea>

        <label for="date">Data:</label>
        <input type="date" name="date" value="{{ old('date', $conference->date) }}" required>

        <label for="location">Vieta:</label>
        <input type="text" name="location" value="{{ old('location', $conference->location) }}" required>

        <button type="submit">Atnaujinti</button>
    </form>
@endsection
