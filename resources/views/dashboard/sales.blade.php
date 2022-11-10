<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if (!Auth::guest() && Auth::user()->role_id == 4)
                    {{--<p>Schrijf hier je code</p>--}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Naam</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach( $clients as $client )
                                <tr>
                                    <th scope="row">{{$client->id}}</th>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('sales.create')}}" class="btn btn-success">Gebruiker Toevoegen</a>
                    @else
                        <p>Je bent niet van deze afdeling</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
