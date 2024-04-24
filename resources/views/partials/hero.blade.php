@extends('layouts.main')

@section('hero')
    <div class="container" style="padding: 100px 0 100px 0">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h5>Experience the Luxurious Taste of</h5>
                <h1><img src="{{ asset('assets/shining.png') }}" alt="star" style="max-width: 50px">Red
                    Velvet Latte! <img src="{{ asset('assets/shining.png') }}" alt="star" style="max-width: 50px"></h1>
                <p>Indulge in our delightful Red Velvet Latte, a unique blend crafted to elevate your coffee
                    experience.
                    Immerse yourself in the rich flavors of creamy cocoa and velvety smoothness, perfectly
                    combined with our finest
                    espresso. Savor the moment. Savor the flavor. Discover Red Velvet Latte today! <img
                        src="{{ asset('assets/chocolate.png') }}" alt="chocolate" style="max-width: 20px"><img
                        src="{{ asset('assets/coffee-cup.png') }}" alt="coffeecup" style="max-width: 20px"></p>
                <button class="btn btn-info" style="font-weight: bold">Buy Now!</button>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/redvelvet.jpg') }}" style="max-width: 20rem; border-radius: 10px;"
                    alt="redvelvet">
            </div>
        </div>
    </div>
@endsection
