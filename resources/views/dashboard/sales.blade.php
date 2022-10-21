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
                @else
                    <p>Je bent niet van deze afdeling</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
