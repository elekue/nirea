@extends('layouts.index')
@section('title', 'Txurdi Spotify - Playlist Zerrenda')

@section('content')
        <h2>Playlist Zerrenda</h2>

        @foreach ($playlists as $playlist)
            <div class="playlist">
                <h3>{{ $playlist->nombre }}</h3>
                @if(count($playlist->songs) > 0)
                    <ul>
                        @foreach($playlist->songs as $song)
                            <li>{{ $song->nombre }} - {{ $song->artista }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Playlist honek ez ditu abestirik.</p>
                @endif
            </div>
        @endforeach



        @endsection
