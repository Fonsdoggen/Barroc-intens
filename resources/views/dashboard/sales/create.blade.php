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
                <h1>Gebruiker toevoegen</h1>
                <form method="post" action="{{route('sales.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Gebruikersnaam:</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <input type="hidden" name="password" value="$2y$10$dXrC3xBmlXjNvcX/spuU2.nQVwxCkSBBJ5BX5HQ/Nz/FBRWLZo1.W" class="form-control">

                    <input type="hidden" name="role_id" value="5" class="form-control">

                    <input type="submit" style="margin-top: 10px;" value="Gebruiker opslaan" class="btn btn-dark">

                </form>
                @else
                    <p>Je bent niet van deze afdeling</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
