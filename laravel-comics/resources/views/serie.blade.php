@extends('layouts.main')

@section('title', 'Prodotti')

@section('contenuto')
    <div id="product-detail">

        <img id="immagine-thumb" src="{{ $serie['thumb'] }}" alt="">

        <div class="serie-wrapper">
            
            <div class="container-left">
                <h2>{{$serie ['title']}}</h2>
                <div class="contenitore-price">
                    <p>US Price: {{ $serie['price'] }}</p>
                    <p>AVAIABLE</p>
                </div>
                <p>{{ $serie['description'] }}</p>
            </div>

            <div class="container-right">
                <img src="{{ $serie['thumb'] }}" alt="adv image">
            </div>
        </div>

        <div class="spec-wrapper">
            <div class="left-spec">
                <h4>Talent</h4>

                <div class="container-talent">
                    <p>Art by:</p>
                    <p>{{ $serie['artists'][0] }}</p>
                </div>

                <div class="container-talent">
                    <p>Art by:</p>
                    <p>{{ $serie['writers'][0] }}</p>
                </div>
            </div>

            <div class="right-spec">
            <h4>Specs</h4>

            <div class="container-talent">
                    <p>Series</p>
                    <p>{{ $serie['series'] }}</p>
            </div>

            <div class="container-talent">
                    <p>U.S. Price</p>
                    <p>{{ $serie['price'] }}</p>
            </div>

            <div class="container-talent">
                    <p>On sale Date</p>
                    <p>{{ $serie['sale_date'] }}</p>
            </div>

                

            </div>
        </div>
        
    </div>
@endsection