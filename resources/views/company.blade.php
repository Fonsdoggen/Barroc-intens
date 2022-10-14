<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if( session('message') )
                    <p class="alert alert-success">{{ session('message') }}</p>
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>

                        <tr>
                            <th>Naam:</th>
                        </tr>
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$company->name}}</td>

                        </tr>
                        @endforeach
                        <a href="{{route("companies.create")}}" class="btn btn-primary">Create it Bozo</a>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
