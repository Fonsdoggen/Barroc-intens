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
            @foreach( $users as $user )
                <tr>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
