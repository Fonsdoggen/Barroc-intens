@extends('layouts.base')

@section('content')

<h1>Product informatie</h1>
<br>
<h2>Productnaam:</h2>
<h3>{{$product->name}}</h3>
<br>
<h2>Bechrijving van product:</h2>
<h3>{{$product->description}}</h3>
<br>
<h2>Prijs:</h2>
<h3>{{$product->price}}</h3>
<br>
<a href="{{route('products.index')}}" class="btn btn-dark"><- Terug</a>
<a href="{{route('products.edit', $product)}}" class="btn btn-dark">Edit</a>
<form method="POST" action="{{route('products.destroy', $product)}}">
    @csrf
    @method('delete')
    <input class="btn btn-danger" type="submit" value="Delete">
</form>
<a href="{{route('offerte.create')}}" class="btn btn-success">Offerte aanmaken</a>


@endsection
