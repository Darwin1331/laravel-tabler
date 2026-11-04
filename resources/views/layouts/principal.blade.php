<!doctype html>
<html lang="es" data-bs-navbar-position="vertical">

<head>
    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">

    <meta name="csrf-token" 
          content="{{ csrf_token()}}">

    <title>
        @yield('title', 'Dashboard') - Mi Sistema
    </title>

    <script src="{{ asset('js/jquery4.js') }}"></script>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body>

    <div class="page">

        {{-- Sidebar --}}
        @include('partials.sidebar')

        {{-- Contenido principal --}}
        <div class="page-wrapper">

            {{-- Navbar superior --}}
            @include('partials.navbar')

            {{-- Encabezado de página --}}
            @include('partials.page-header')

            {{-- Contenido --}}
            <main class="page-body">
                <div class="container-xl">

                    @yield('content')

                </div>
            </main>

            {{-- Footer --}}
            @include('partials.footer')

        </div>

    </div>

</body>

</html>