@extends('layouts.main')

@section('product')
    <div class="container p-3 mb-2 bg-info text-dark">
        <div class="row align-items-center">
            <div class="text-center mb-5">
                <h1>PRODUCTS</h1>
                <hr style="width: 10em; margin: 0 auto; border: 2px solid black">
            </div>
            @foreach ($products as $item)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ $item['foto'] }}" class="card-img-top" style="border-radius: 10px"
                            alt="{{ $item['menu'] }}">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between align-items-center">
                                {{ $item['menu'] }}
                                <span><button class="btn btn-info p-1 mr-2"
                                        style="font-weight: bold">{{ $item['harga'] }}</button></span>
                            </h5>
                            <p class="card-text">{{ $item['deskripsi'] }}</p>
                            <button class="btn btn-primary w-100">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
