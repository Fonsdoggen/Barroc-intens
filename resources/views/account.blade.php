@extends('layouts.base')

@section('content')

    <h4 style="padding-top: 20px; padding-bottom: 15px"> Welkom {{ Auth::user()->name }}</h4>
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
    <p>Stuur een mail naar <b><a href="mailto:privacy@barroc.it">privacy@barroc.it</a></b> als u wilt dat uw account wordt verwijderd.</p>
@endsection
