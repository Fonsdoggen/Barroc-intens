@extends('layouts.base')

@section('content')

<div class="test">
    <img src="{{asset($product->image_path)}}" style="width:420px;height:420px;margin:69px 169px 69px 0px;float:left;" alt="Afbeelding van product">
    <br>
    <h1 style="margin-top:69px;">{{$product->name}}</h1>
    <br>
    <h3>Omschrijving</h3>
    <p>{{$product->description}}</p>
    <br>
    {{-- <h3>Prijs</h3>
    <p>{{$product->price}}</p>
    <br> --}}
    <div class="div" style="margin-bottom: 150px">
        <a type="button" class="btn btn-warning" style="background-color: #FDD716; border: 0px;" href="{{url()->previous()}}"><- Terug</a>
        @if (!Auth::guest() && Auth::user()->role_id == 2)
            <a href="{{route('products.edit', $product)}}" class="btn btn-dark">Edit</a>
            @if ($product->InOrder == false)
            <form method="POST" action="{{route('products.destroy', $product)}}">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
            @else
            <p>Kan niet verwijderen omdat hij besteld is</p>
            @endif
        @endif
    </div>
</div>

@endsection
