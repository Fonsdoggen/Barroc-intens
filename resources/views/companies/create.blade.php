<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="Post" action="{{route('companies.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="Name">Naam:</label>
                            <input type="text" name="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefoonnummer:</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="street">Straat:</label>
                            <input type="text" name="street" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="house_number">Huisnummer:</label>
                            <input type="Number" name="house_number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="city">Stad:</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="country_code">Land-code:</label>
                            <input type="text" name="country_code" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contact_id">Contact persoon voor bedrijf:</label>
                            <select name="contact_id">
                                @foreach($users as $user)
                                    <option></option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" style="margin-top: 10px;" value="Opslaan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
