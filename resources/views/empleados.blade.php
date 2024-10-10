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
                <h1 class="text-2xl font-bold mb-4">Empleados</h1>

                <!-- Botón para agregar empleado -->
                
                <a href="{{ route('empleado.create') }}">
                    <button class="mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Crear Empleado
                    </button>
                </a>
                

                <!-- Tabla de empleado -->
                <table border="1">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nombre</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Rol</th>
                            <th class="py-2 px-4 border-b">Privilegios</th>
                            <th class="py-2 px-4 border-b">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $user->nombre }}</td>
                                <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                                <td class="py-2 px-4 border-b">{{ $user->rol }}</td>
                                <td class="py-2 px-4 border-b">{{ $user->privilegios }}</td>
                                <td class="py-2 px-4 border-b">
                                    <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Editar</button>
                                    <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Borrar</button>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            
            </div>
        </div>

        @livewireScripts
    </body>
</html>
