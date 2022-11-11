@extends('layouts.base')

@section('content')
    <h1>Account aanpassen</h1>
    <form method="post" action="{{route('accounts.update', $account)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Naam:</label>
            <input type="text" name="name" value="{{$account->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">E-mail:</label>
            <input type="text" name="email" value="{{$account->email}}" class="form-control">
        </div>

        <input type="submit" style="margin-top: 10px;" value="Account bewerken" class="btn btn-dark">
    </form>
@endsection
