<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (!Auth::guest() && Auth::user()->role_id == 4)
                    {{--<p>Schrijf hier je code</p>--}}
                    <a href="{{route('sales.create')}}" class="btn btn-success">Gebruiker Toevoegen</a>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Naam</th>
                                <th scope="col">Email</th>
                                <th scope="col">Wachtwoord</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach( $clients as $client )
                              <tr>
                                <th scope="row">{{$client->id}}</th>
                                <td>{{$client->name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->password}}</td>
                              </tr>
                                @endforeach
                            </tbody>
                          </table>
                        
                @else
                    <p>Je bent niet van deze afdeling</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
