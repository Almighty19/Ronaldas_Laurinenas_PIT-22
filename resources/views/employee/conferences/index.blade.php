@extends('layouts.app')

@section('title', 'Darbuotojo konferencijos')

@section('content')
    <h1>Darbuotojo konferencijos</h1>
    <ul>
        @foreach($conferences as $conference)
            <li>
                <a href="{{ route('employee.conference.show', $conference->id) }}">{{ $conference->title }}</a>
            </li>
        @endforeach
    </ul>
    @if($conferences->isEmpty())
        <p>Šiuo metu nėra suplanuotų konferencijų.</p>
    @endif
@endsection
