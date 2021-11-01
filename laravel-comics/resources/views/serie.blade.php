@extends('layouts.main')

@section('title', 'Prodotti')

@section('contenuto')

    <!-- inizio sezione linea azzurra e immagine -->
    <div class="linea-blu">
        <img id="immagine-thumb" src="{{ $serie['thumb'] }}" alt="">
    </div>

    <!-- Inizio sezione prodotto -->
    <div id="product-detail">

        <div class="serie-wrapper">
            
    
            <div class="container-left">
                <h2>{{$serie ['title']}}</h2>
    
    <!-- inizio sezione prezzo e disponibiltà -->
                <div class="dispo-wrapper">
                        
                    <div class="contenitore-price-dispo">
                        <p>US Price:<span>{{ $serie['price'] }}</span></p>
                        <p id="avaiable">AVAIABLE</p>
                    </div>
                    <div class="contenitore-check-dispo">
                        <p>Check Disponibility</p>
                    </div>
                </div>

                <p>{{ $serie['description'] }}</p>
            </div>

            <div class="container-right">
                <img src="{{ $serie['thumb'] }}" alt="adv image">
            </div>
        </div>
    
    <!-- inizio wrapper specs -->
        <div class="spec-wrapper">
    <!-- inizio sezione sinistra talent -->
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

    <!-- inizio sezione destra specs -->
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