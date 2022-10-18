@extends('layouts.base')

@section('content')
    </div>
    <div class="home-intro">
        <div class="home-intro-item">
            <div class="text-light flex-wrapper">
                <h2>De lekkerste koffie</h2>
            </div>
            <div class="flex-wrapper-text">
                <p>Wij leveren de lekkerste koffie aan bedrijven, horeca- en speciaalzaken. Bent u geinteresseerd? hieronder hebben we een aantal machines staan waar u een keuze uit kan maken.</p>
                <div class="home-intro-button">
                    <button type="button" class="btn btn-warning" style="background-color: #FDD716; border: 0px" onClick="document.getElementById('down').scrollIntoView();">Machines</button>
                </div>
            </div>
        </div>
    </div>

    <div class="home">
        <div class="container">
            <h1 id="down" style="color: white; display: flex; justify-content: flex-start; padding-top: 20px">Producten</h1>
        </div>
        <div class="container" style="display: flex; justify-content: flex-start; flex-wrap: wrap">
            @foreach( $products as $product )
            <div class="card home-card" style="width: 21rem; margin-right: 95px; border-radius: 20px;">
                <img class="card-img-top" src="{{asset('img/machine-bit-deluxe.png')}}" alt="Afbeelding van product">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <p class="card-text">{{ $product->description }}</p>
                    <div class="home-main-button">
                        <a type="button" class="btn btn-warning" style="background-color: #FDD716; border: 0px;" href="{{route('products.show', $product)}}">Meer informatie -></a>
                    </div>
                </div>
              </div>
            @endforeach
        </div>

        <div class="container div-spacing" style="padding-bottom: 30px;">
            @auth
            <a href="{{route('products.create')}}" class="btn btn-success">Product Toevoegen</a>
            @endauth
        </div>

@endsection
