<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="/resources/css/app.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        
        <x-banner />
        
        <div class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
            @livewire('navigation-menu')
        </div>

        <div class="flex justify-center items-center min-h-screen" style="background-color: #f8f9fa;">
            @include('sidebar')

            <div class="flex-grow max-w-lg p-6 bg-white shadow-lg rounded-lg" style="margin-top: 64px; margin-left: 250px;">
                <h1 class="text-2xl font-semibold text-center mb-6">Registrar Nuevo Cliente</h1>

                <form action="{{ url('/clientes') }}" method="POST" class="space-y-4">
                    @csrf  <!-- Token de seguridad para formularios -->

                    <!-- Nombre -->
                    <div class="flex flex-col">
                        <label for="nombre" class="text-lg font-medium mb-1">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required
                               class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col">
                        <label for="email" class="text-lg font-medium mb-1">Email:</label>
                        <input type="email" id="email" name="email" required
                               class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    </div>

                    <!-- puntos -->
                    <div class="flex flex-col">
                        <label for="password" class="text-lg font-medium mb-1" type="password">Contraseña:</label>
                        <input type="text" id="puntos" name="puntos" required
                               class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    </div>

                    <!-- Mostrar alertas -->
                     @if (session('success'))
                        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                        {{ session('success') }}
                         </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

<!-- Botón de envío -->
                    <div class="flex justify-center mt-6 ">
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300  mr-2">
                            Guardar cliente
                        </button>
                        <a href="{{ url('/clientes') }}" >
                            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300 ml-2">
                                Volver
                            </button>
                        </a>
                    </div>

                </form>
            </div>
        </div>

        @livewireScripts
    </body>
</html>
