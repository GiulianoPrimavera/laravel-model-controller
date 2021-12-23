@extends('layout.base_layout')

@section('main')
<main>

    <div class="movies_container">

        {{-- @dump($model) --}}
        
        @foreach ($model as $movie)
        
        <div class="card_container">
            <div class="single_card">
                <div class="text_container">
                    <h1>{{ $movie->title }}</h1>
                    <ul>
                        <li>titolo originale: <strong>{{ $movie->original_title }}</strong></li>
                        <li>nazionalità: <strong>{{ $movie->nationality }}</strong> </li>
                        <li>anno di uscita: <strong>{{ $movie->date }}</strong> </li>
                        <li>voto: <strong>{{ $movie->vote }}</strong> </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</main>
@endsection