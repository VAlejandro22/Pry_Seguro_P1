<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Paleta profesional -->
    <style>
        body {
            background: linear-gradient(to bottom right, #f0faff, #e6f0f7);
            font-family: 'Figtree', sans-serif;
            color: #1e3a5f;
        }

        .navbar-bg {
            background-color: #dceeff;
        }

        .header-section {
            background-color: #f9fcff;
            box-shadow: 0 2px 6px rgba(0, 40, 80, 0.1);
        }

        .content-box {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 40, 80, 0.08);
        }

        footer {
            color: #7b93a7;
        }
    </style>
</head>
<body class="antialiased">

    <div class="min-h-screen flex flex-col">

        <!-- Navegación -->
        <div class="navbar-bg sticky top-0 z-50 shadow-sm">
            @include('layouts.navigation')
        </div>

        <!-- Encabezado de página -->
        @isset($header)
            <header class="header-section rounded-b-md mt-4 mx-4 sm:mx-8">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-2xl font-semibold text-blue-800">
                        {{ $header }}
                    </h1>
                </div>
            </header>
        @endisset

        <!-- Contenido principal -->
        <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 mt-8">
            <div class="content-box p-8">
                {{ $slot }}
            </div>
        </main>

        <!-- Footer -->
        <footer class="text-center text-sm py-6 mt-10">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.
        </footer>
    </div>

</body>
</html>
