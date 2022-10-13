@extends('layouts.base')

@section('content')
    <h1>Offerte aanmaken</h1>
    <form action="{{route('offerte.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Amount:</label>
            <input type="number" name="amount" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price per product:</label>
            <input type="number" name="price_per_product" class="form-control">
        </div>
        <div class="form-group">
            <input class="mt-4 btn btn-primary" type="submit" value="Opslaan">
        </div>
    </form>

@endsection
