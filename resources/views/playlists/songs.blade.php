@extends('layouts.index')
@section('title', 'Txurdi Spotify - Songs')

@section('content')
        <h2>Playlist: {{ $playlist->nombre }}</h2>

        <div class="playlist">
            @if(count($songs) > 0)
                <ul>
                    @foreach($songs as $song)
                        <li>{{ $song->nombre }} - {{ $song->artista }}</li>
                    @endforeach
                </ul>
            @else
                <p>Playlist honek ez ditu abestirik.</p>
            @endif
        </div>

 @endsection
