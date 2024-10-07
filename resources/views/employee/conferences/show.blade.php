@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <h1>{{ $conference->title }}</h1>
    <p><strong>Aprašymas:</strong> {{ $conference->description }}</p>
    <p><strong>Data:</strong> {{ $conference->date }}</p>
    <p><strong>Vieta:</strong> {{ $conference->location }}</p>

    <a href="{{ route('employee.conferences.index') }}">Grįžti į konferencijų sąrašą</a>
@endsection
