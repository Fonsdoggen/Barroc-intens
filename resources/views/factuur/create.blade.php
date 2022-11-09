@extends('layouts.base')

@section('content')
    <h1>Factuur aanvragen</h1>
    <form action="{{route('factuur.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Naam:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="street">Straat:</label>
            <input type="text" name="street" class="form-control">
        </div>
        <div class="form-group">
            <label for="postcode">Postcode:</label>
            <input type="text" name="postcode" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="tel-nummer">Telefoonnummer:</label>
            <input type="number" name="tel-nummer" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Datum:</label>
            <input type="date" name="date" class="form-control">
        </div>
        
        {{-- <div class="form-group">
            <label class="form-label">Betaald op:</label>
            <input type="date" name="paid_at" class="form-control">
        </div> --}}

        <div class="form-group">
                <label for="company_id" class="div-spacing">Company</label>
                <select name="company_id" >
                    @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
        <div class="form-group">
            <input class="mt-4 btn btn-primary" type="submit" value="Opslaan">
        </div>
    </form>
@endsection
