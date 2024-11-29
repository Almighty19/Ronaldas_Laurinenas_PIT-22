@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <h1>{{ $conference->title }}</h1>
    <p>{{ $conference->description }}</p>
    <p>Data: {{ $conference->date }}</p>
    <p>Vieta: {{ $conference->location }}</p>

    <h2>Klientai</h2>
    @if ($conference->participants->isEmpty())
        <p>Nėra klientu :(</p>
    @else
        <ul>
            @foreach ($conference->participants as $participant)
                <li>{{ $participant->name }}</li>
            @endforeach
        </ul>
    @endif
@endsection

