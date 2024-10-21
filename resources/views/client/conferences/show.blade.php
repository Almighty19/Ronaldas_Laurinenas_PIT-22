@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <h1>{{ $conference->title }}</h1>
    <p>{{ $conference->description }}</p>
    <p>Data: {{ $conference->date }}</p>
    <p>Vieta: {{ $conference->location }}</p>
@endsection
