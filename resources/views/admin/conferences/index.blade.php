@extends('layouts.app')

@section('title', 'Konferencijų sąrašas')

@section('content')
    <h1>Visos konferencijos</h1>

    <a href="{{ route('admin.conference.create') }}">Kurti naują konferenciją</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($conferences as $conference)
            <li>
                {{ $conference->title }}
                <a href="{{ route('admin.conference.edit', $conference->id) }}">Redaguoti</a>
                <form action="{{ route('admin.conference.destroy', $conference->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Ištrinti</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
