@extends('layouts.main')

@section('title', 'Home')

@section('contenuto')

<!-- inizio sezione main series -->
<section id="series">

    <!-- inizio sezione etichetta current series -->
    <a href="#">
    <div class="current-series">
        <h2>CURRENT SERIES</h2>
    </div>
    </a>

    <div class="main-container">
        
        @foreach($series_list as $serie)
    
        <div class="card">
            <a href="{{ route('serie', ['id' => $loop ->index]) }}">

            <img src="{{ $serie['thumb'] }}" alt="">
            <p>{{ $serie['title'] }}</p>

            </a>
        </div>
    
        @endforeach

    </div>

</section>
@endsection