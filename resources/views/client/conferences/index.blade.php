@extends('layouts.app')

@section('title', 'Planuojamos konferencijos')

@section('content')
    <h1>Planuojamos konferencijos</h1>
    <ul>
        @foreach($conferences as $conference)
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
    @if($conferences->isEmpty())
        <p>Šiuo metu nėra suplanuotų konferencijų.</p>
    @endif
@endsection

