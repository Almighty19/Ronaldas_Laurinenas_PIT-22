@extends('layouts.app')

@section('title', 'Darbuotojo konferencijos')

@section('content')
    <h1>Konferencijų sąrašas darbuotojui</h1>
    <ul>
        @foreach($conferences as $conference)
            <li>
                <a href="{{ route('employee.conference.show', $conference->id) }}">{{ $conference->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
