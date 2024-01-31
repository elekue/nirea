@extends('layouts.index')
@section('title', 'Txurdi Spotify - Podcast zerrenda')

@section('content')

        @if($busqueda == 1)
            <!-- Usuario logueado -->
            <p>Ongi etorri, {{ $usuario->name }}!</p>

            <!-- Lista de Podcasts -->
            <h2>Podcast zerrenda</h2>

            @if(count($podcasts) > 0)
                @foreach($podcasts as $podcast)
                    <div class="podcast-details">
                        <h3>{{ $podcast->nombre }}</h3>

                        @if($usuario->tienePodcast($podcast))
                            <span class="corazon-rojo">&#10084;</span>
                        @else
                            <span class="corazon-blanco">&#10084;</span>
                        @endif
                    </div>
                @endforeach
            @else
                <p>Ez dago Podcast datu basean.</p>
            @endif
        @else
            <!-- Usuario no logueado -->
            @if($busqueda == 2)
                <p>Podcast-ak ikusi ahal izateko logeatuta egon behar duzu</p>
            @endif

            <!-- Formulario de login -->
            <form action="{{ route('podcasts.login') }}" method="GET">
                @csrf
                <label for="email">Emaila:</label>
                <input type="email" name="email" required>

                <label for="password">Pasahitza:</label>
                <input type="password" name="password" required>

                <button type="submit">Saioa hasi</button>
            </form>
        @endif
 @endsection
