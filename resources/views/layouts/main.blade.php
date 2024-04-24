<!doctype html>
<html lang="en">

<head>
    @include('partials.header')
</head>

<body>
    {{-- navbar --}}
    @include('partials.navbar')

    <main class="container">
        {{-- content hero --}}
        @yield('hero')


        {{-- content section --}}
        @yield('product')

    </main>

    @include('partials.footer')
</body>

</html>
