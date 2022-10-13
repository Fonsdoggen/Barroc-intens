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
                    <button type="button" class="btn btn-warning" onClick="document.getElementById('down').scrollIntoView();">Machines</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 style="color: black; display: flex; justify-content: flex-start">Products</h1>
    </div>
    <div class="container" id="down" style="display: flex; justify-content: flex-start">
        @foreach( $products as $product )
        <div class="card" style="width: 18rem; margin-right: 60px;">
            <img class="card-img-top" src="{{asset('img/machine-bit-deluxe.png')}}" alt="Afbeelding van product">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $product->description }}</p>
              <a href="{{route('products.show', $product)}}" class="btn btn-dark">Meer informatie -></a>
            </div>
          </div>
        @endforeach
    </div>
    <div class="container">
        <a href="{{route('products.create')}}" class="btn btn-success">Product Toevoegen</a>
    </div>

{{--<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/machine-bit-light.png')}}" alt="Machine Bit Light">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>--}}

@endsection
