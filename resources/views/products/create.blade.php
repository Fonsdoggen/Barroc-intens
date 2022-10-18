@extends('layouts.base')

@section('content')
        <h1>Product toevoegen</h1>
        <form method="post" action="{{route('products.store')}}">
            @csrf
            <div class="form-group">
              <label for="">Productnaam:</label>
              <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
              <label class="div-spacing" for="">Beschrijving:</label>
              <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
              <label class="div-spacing" for="">Afbeelding:</label>
              <input type="file" name="image_path" class="form-control">
            </div>

            <div class="form-group">
              <label class="div-spacing" for="">Prijs:</label>
              <input type="number" name="price" class="form-control">
            </div>

            <input type="submit" style="margin-top: 10px;" value="Product opslaan" class="btn btn-dark">

        </form>
@endsection
