<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Katalog</title>
</head>

<body>
    <main>
        <div class="container p-3 my-5 bg-info text-dark">
            <div class="row align-items-center">
                <div class="text-center mb-5">
                    <h1>PRODUCTS</h1>
                    <div class="border border-top border-black mx-auto mt-3" style="width: 100px"></div>
                </div>
                @foreach ($produk as $barang)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ $barang['foto'] }}" class="card-img-top" style="border-radius: 10px"
                                alt="{{ $barang['nama'] }}">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-between align-items-center">
                                    {{ $barang['nama'] }}
                                    <span><button class="btn btn-success p-1 mr-2"
                                            style="font-weight: bold">{{ $barang['kondisi'] }}</button></span>
                                </h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-success p-1 mr-2"
                                        style="font-weight: bold">{{ $barang['stok'] }}
                                        <span><button class="btn btn-info p-1 mr-2" style="font-weight: bold">Rp.
                                                {{ $barang['harga'] }}</button></span>
                                    </button>
                                </div>
                                <p class="card-text">{{ $barang['deskripsi'] }}</p>
                                <button class="btn btn-primary w-100">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
