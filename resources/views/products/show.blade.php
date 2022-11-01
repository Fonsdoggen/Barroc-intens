@extends('layouts.base')

@section('content')

<div class="test">
    <img src="{{asset('img/machine-bit-deluxe.png')}}" style="width:420px;height:420px;margin:69px 169px 69px 0px;float:left;" alt="Afbeelding van product">
    <br>
    <h1 style="margin-top:69px;">{{$product->name}}</h1>
    <br>
    <h3>Omschrijving</h3>
    <p>{{$product->description}}</p>
    <br>
    <h3>Prijs</h3>
    <p>{{$product->price}}</p>
    <br>
    <a type="button" class="btn btn-warning" style="background-color: #FDD716; border: 0px;" href="{{route('products.index')}}"><- Terug</a>
    <a href="{{route('products.edit', $product)}}" class="btn btn-dark">Edit</a>
    <form method="POST" action="{{route('products.destroy', $product)}}">
        @csrf
        @method('delete')
        <input class="btn btn-danger" type="submit" value="Delete">
    </form>
    <a href="{{route('offerte.create')}}" class="btn btn-success" style="margin-bottom:69px;">Offerte aanvragen</a>
    </div>


@endsection
