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
                    <h3>Leasecontract aanmaken</h3>
                    <form method="post" action="{{route('finance.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="">Producten:</label>
                            <input type="number" name="product_id" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Bedrag:</label>
                            <input type="number" name="price_per_product" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Totaalbedrag:</label>
                            <input type="number" name="amount" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Offerte:</label>
                            <input type="number" name="quotation_id" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Maandelijks:</label>
                            <input type="radio" name="billing_type" value="0">
                            <label for="">Jaarlijks:</label>
                            <input type="radio" name="billing_type" value="1">
                        </div>

                        <input type="submit" style="margin-top: 10px;" value="Leasecontract opslaan" class="btn btn-primary">
                    </form>
                @else
                    <p>Je bent niet van deze afdeling</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
