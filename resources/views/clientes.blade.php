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
        
        @livewire('navigation-menu')

        <div class="flex">
            @include('sidebar')

            <div class="flex-grow p-4" style="margin-top: 64px; margin-left: 250px;">
                <h1 class="text-2xl font-bold mb-4">Clientes</h1>

                <!-- Botón para agregar cliente -->
                
                <a href="{{ url('/clientes/create') }}" >
                    <button class="mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Agregar Cliente
                    </button>
                </a>

                <!-- Tabla de clientes -->
                <table border="1">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nombre</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $cliente->nombre }}</td>
                                <td class="py-2 px-4 border-b">{{ $cliente->email }}</td>
                                <td class="py-2 px-4 border-b">{{ $cliente->puntos }}</td>
                                <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Editar</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Borrar</button>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            
            </div>
        </div>

        @livewireScripts
    </body>
</html>
