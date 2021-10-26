@extends('layouts.main')

@section('title', 'Home')

@section('contenuto')
<div id="series">
        <div class="main-container">
            

            @foreach($series_list as $serie)
        <a href="">
            <div class="card">
                <img src="{{ $serie['thumb'] }}" alt="">
                <p>{{ $serie['title'] }}</p>
            </div>
        </a>

            @endforeach

        </div>

        
    </div>
@endsection