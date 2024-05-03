<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Products</title>
</head>

<body>
    <main>
        <div class="container p-3 my-5 bg-info text-dark">
            <div class="row align-items-center">
                <div class="col">
                    <div class="text-center">
                        <h1>PRODUCTS</h1>
                        <div class="border border-top border-dark mx-auto mt-3" style="width: 100px"></div>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="{{ route('form-product') }}" class="btn btn-dark">Tambah Produk</a>
                </div>
            </div>

            <div class="row align-items-center">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card bg-white w-100" style="margin: 10px">
                            <img class="card-img-top" style="border-radius: 10px;" src="{{ $product->foto }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between my-2">
                                    <p class="card-title fw-bold my-auto" style="font-size: 24px">
                                        {{ $product->nama }}
                                    </p>
                                    @if ($product->kondisi == 'Baru')
                                        <p class="my-auto rounded py-1 bg-success px-2 fw-semibold"
                                            style="font-weight: bold">
                                            {{ $product->kondisi }}</p>
                                    @else
                                        <p class="my-auto rounded py-1 bg-warning px-2 fw-semibold"
                                            style="font-weight: bold">
                                            {{ $product->kondisi }}</p>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between my-2">
                                    <p class="my-auto rounded py-1 bg-success px-2 fw-semibold text-light"
                                        style="font-weight: bold">
                                        {{ $product->stok }}</p>
                                    <p class="my-auto rounded py-1 bg-info px-2 fw-semibold" style="font-weight: bold">
                                        Rp.
                                        {{ number_format($product->harga, 0, ',', '.') }}</p>
                                    <p class="my-auto rounded py-1 bg-secondary px-2 fw-semibold text-light"
                                        style="font-weight: bold">
                                        {{ $product->berat }} gr</p>
                                </div>
                                <p class=""
                                    style="overflow: hidden;max-width: 400px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; margin: 10px auto;">
                                    {{ $product->deskripsi }}
                                </p>
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
