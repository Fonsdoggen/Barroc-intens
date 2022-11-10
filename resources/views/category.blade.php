<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorieën') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Auth::user()->role_id !== 5)
                        @if( session('message') )
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="container">
                                <table>
                                    <tr>
                                        <th>Categorie:</th>
                                    </tr>
                                    @foreach($product_categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                        </tr>
                                </table>
                                <div class="buttons d-flex">
                                    <form action="{{route('category.destroy', $category->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Verwijderen" class="btn btn-danger">
                                    </form>
                                </div>
                                @endforeach
                                <a href="{{route("category.create")}}" style="margin-top: 10px;" class="btn btn-primary">Voeg categorie toe</a>
                            </div>
                        </div>
                    @else
                        <p>Je bent geen medewerker</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
