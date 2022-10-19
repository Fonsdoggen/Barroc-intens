<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="Post" action="{{route('category.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Naam:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="is_employee_only">Is het alleen voor medewerkers?</label>
                            <input type="number" name="is_employee_only" class="form-control">
                        </div>
                        <input type="submit" style="margin-top: 10px;" value="Opslaan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
