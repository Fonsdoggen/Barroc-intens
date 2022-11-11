@extends('layouts.base')

@section('content')

    <h5 style="padding-top: 20px; padding-bottom: 15px"> Welkom {{ Auth::user()->name }}</h5>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Naam</th>
            <th scope="col">E-mail</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{Auth::user()->name}}</td>
                <td>{{Auth::user()->email}}</td>
                <td><a href="{{route('accounts.edit', Auth::user()->id)}}" class="btn btn-warning">Gebruikersgegevens wijzigen</a></td>
            </tr>
        </tbody>
    </table>
@endsection
