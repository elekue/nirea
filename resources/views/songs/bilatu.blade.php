@extends('layouts.index')
@section('title', 'Txurdi Spotify - Bilatzailea')

@section('content')
    <!-- Barra de búsqueda -->
    <div class="search-bar">
        <form action="{{ route('songs.bilatu') }}" method="GET">
            <input type="text" name="query" placeholder="Abestiak bilatu">
            <button type="submit">Bilatu</button>
        </form>
    </div>

    <section>
        {{-- <h2>Resultado de Búsqueda para "{{ $query }}"</h2> --}}

        @if(count($canciones) > 0)
            <ul>
                @foreach($canciones as $cancion)
                    <li>{{ $cancion->nombre }} - {{ $cancion->artista }}</li>
                    @if($cancion->playlist)
                        (Playlist: {{ $cancion->playlist->nombre }})
                    @endif
                @endforeach
            </ul>
        @else
            <p>Ez dira abestirik topatu.</p>
        @endif
    </section>
@endsection
