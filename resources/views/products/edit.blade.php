@extends('layouts.base')

@section('content')
    <h1>Product toevoegen</h1>
    <form method="post" action="{{route('products.update', $product)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Productnaam:</label>
            <input type="text" name="name" value="{{$product->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label class="div-spacing" for="">Beschrijving:</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$product->description}}</textarea>
        </div>

        <div class="form-group">
            <label class="div-spacing" for="">Afbeelding:</label>
            <input type="file" name="image_path" class="form-control">
        </div>

        <div class="form-group">
            <label class="div-spacing" for="">Prijs:</label>
            <input type="number" name="price" value="{{$product->price}}" class="form-control">
        </div>

        <div class="form-group">
            <label class="div-spacing" for="product_category_id">Categorie:</label>
            <div class="col-sm-10">
                <select class="form-select" name="product_category_id" id="product_category_id">
                    <option selected value="0">Kies...</option>
                    <option value="1">Light</option>
                    <option value="2">Deluxe</option>
                </select>
            </div>
        </div>

        <input type="submit" class="div-spacing" value="Product bewerken" class="btn btn-dark">
    </form>
@endsection
