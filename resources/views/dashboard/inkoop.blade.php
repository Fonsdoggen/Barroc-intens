<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inkoop') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if (!Auth::guest() && Auth::user()->role_id == 2)
                    {{--<p>Schrijf hier je code</p>--}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Productnaam</th>
                                <th scope="col">Beschrijving</th>
                                <th scope="col">Prijs</th>
                                <th scope="col">Status</th>
                                <th scope="col">Voorraad</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach( $products as $product )
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->stock_status}}</td>
                                    <td>{{$product->stock}}</td>
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
    </div>
</x-app-layout>
