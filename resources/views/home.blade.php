@extends('layouts.base')

@section('content')
    </div>
    <div class="home-intro">
        <div class="home-intro-item">
            <div class="text-light flex-wrapper">
                <h2>De lekkerste koffie</h2>
            </div>
            <div class="flex-wrapper-text">
                <p>Wij leveren de lekkerste koffie aan bedrijven, horeca- en speciaalzaken. Bent u geinteresseerd? hieronder hebben we een aantal machines staan waar u een keuze uit kan maken.</p>
                <div class="home-intro-button">
                    <button type="button" class="btn btn-warning" style="background-color: #FDD716; border: 0px" onClick="document.getElementById('down').scrollIntoView();">Machines</button>
                </div>
            </div>
        </div>
    </div>

    <div class="home">
        <div class="container">
            <h1 id="down" style="color: white; display: flex; justify-content: flex-start; padding-top: 20px">Producten</h1>

            <div class="form-outline">
                <input type="text" class="form-control product-search-bar" id="myInput" onkeyup="myFunction()" placeholder="Zoek een apparaat.." title="Type in a name">
            </div>
            <ul class="product-search-ul" id="myUL">
                @foreach( $products as $product )
                    <li style="display: none"><a onclick="window.location.href='{{route('products.show', $product)}}'"<a>{{ $product->name }}</a></li>
                @endforeach
            </ul>
        </div>

        <script>
            function myFunction() {
                const productSearch = document.getElementById('myUL');
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
                if(document.getElementById("myInput").value.length == 0){
                    productSearch.style.display = "none";
                }
                else {
                    productSearch.style.display = "block";
                }
            }
        </script>

        <div class="container" style="display: flex; justify-content: flex-start; flex-wrap: wrap">
            @foreach( $products as $product )
            <div class="card home-card" style="width: 21rem; margin-right: 95px; border-radius: 20px;">
                <img class="card-img-top" src="{{asset('img/machine-bit-deluxe.png')}}" alt="Afbeelding van product">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <p class="card-text">{{ $product->description }}</p>
                    <div class="home-main-button">
                        <a type="button" class="btn btn-warning" style="background-color: #FDD716; border: 0px;" href="{{route('products.show', $product)}}">Meer informatie -></a>
                    </div>
                </div>
              </div>
            @endforeach
        </div>

        <div class="container div-spacing" style="padding-bottom: 30px;">
            @auth
            <a href="{{route('products.create')}}" class="btn btn-success">Product Toevoegen</a>
            @endauth
        </div>

@endsection
