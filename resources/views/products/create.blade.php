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
              <label style="margin-top: 24px" for="">Beschrijving:</label>
              <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
              <label style="margin-top: 24px" for="">Afbeelding:</label>
              <input type="file" name="image_path" class="form-control">
            </div>

            <div class="form-group">
              <label style="margin-top: 24px" for="">Prijs:</label>
              <input type="number" name="price" class="form-control">
            </div>

            <div class="form-group">
              <label style="margin-top: 24px" for="product_category_id">Categorie:</label>
              <div class="col-sm-10">
                  <select class="form-select" name="product_category_id" id="product_category_id">
                      <option selected value="0">Kies...</option>
                      <option value="1">Light</option>
                      <option value="2">Deluxe</option>
                  </select>
              </div>
          </div>

            <input type="submit" style="margin-top: 24px" value="Product opslaan" class="btn btn-dark">

        </form>
@endsection
