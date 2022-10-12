@extends('layouts.base')

@section('content')
    <h1>Offerte aanmaken</h1>
    <form action="{{route('offerte.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Contactpersoon</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">KvK nummer:</label>
            <input type="Number" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Straat en huisnummer:</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Postcode en plaats:</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <input class="mt-4 btn btn-primary" type="submit" value="Opslaan">
        </div>
    </form>

@endsection
