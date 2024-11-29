@extends('layouts.app')

@section('title', 'Konferencijų sąrašas')

@section('content')
    <h1>Konferencijų sąrašas</h1>
    <ul>
        @foreach ($conferences as $conference)
            <li>
                <a href="{{ route('client.conference.show', $conference->id) }}">{{ $conference->title }}</a>
                <form action="{{ route('client.conference.register') }}" method="POST">
                    @csrf
                    <input type="hidden" name="conference_id" value="{{ $conference->id }}">
                    <button type="submit">Registruotis</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

