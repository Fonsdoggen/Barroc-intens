<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Finance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if (!Auth::guest() && Auth::user()->role_id == 1)
                    {{--<p>Schrijf hier je code</p>--}}
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Bedrag</th>
                            <th scope="col">Totaal bedrag</th>
                            <th scope="col">Offerte</th>
                            <th scope="col">Jaarlijks of maandelijkse betaling</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($finance as $finances)
                            <tr>
                                <th scope="row">{{$finances->product_id}}</th>
                                <td>&euro; {{$finances->price_per_product}}</td>
                                <td>&euro; {{$finances->amount}}</td>
                                <td>{{$finances->quotation_id}}</td>
                                    @if ($finances->billing_type == 0)
                                        <td>Maandelijks</td>
                                    @else
                                        <td>Jaarlijks</td>
                                    @endif
                                <td><a href="{{route('finance.edit', $finances)}}" class="btn btn-warning">Leasecontract wijzigen</a></td>
                                <td><form method="POST" action="{{route('finance.destroy', $finances)}}">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('finance.create')}}" class="btn btn-success">Leasecontract aanmaken</a>
                @else
                    <p>Je bent niet van deze afdeling</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
