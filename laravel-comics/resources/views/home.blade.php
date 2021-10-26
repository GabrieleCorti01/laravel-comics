@extends('layouts.main')

@section('title', 'Home')

@section('contenuto')
<div id="series">
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

        
    </div>
@endsection