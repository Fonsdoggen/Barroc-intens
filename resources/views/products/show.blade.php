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

@endsection