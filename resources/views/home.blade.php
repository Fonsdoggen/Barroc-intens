@extends('layouts.base')

@section('content')

    <h1>Products</h1>
    @foreach( $products as $product )
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/machine-bit-deluxe.png')}}" alt="this shit aint working 😍">
        <div class="card-body">
          <h5 class="card-title">{{ $product->name }}</h5>
          <p class="card-text">{{ $product->description }}</p>
          <a href="{{route('products.show', $product)}}" class="btn btn-primary">Meer informatie -></a>
        </div>
      </div>
    @endforeach

@endsection
