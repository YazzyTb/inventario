<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>

        <!-- Cargar CSS con Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <header style="background-color: #C3AD9C">
        <x-application-logo class="w-auto max-h-14 ml-10 mt-0" />
    </header>
    <body class="min-h-screen" style="background: linear-gradient(10deg,#ffff , #C3AD9C); justify-content: center">
        <div class="container mx-auto p-6">
            <!-- Encabezado -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
               
                <div>
                    <h1 class="mb-2 text-xl font-semibold text-gray-900 dark:text-black">
                        "Bienvenido!"
                    </h1>
                    <p class="mb-2 text-xs font-semibold text-gray-900 dark:text-black">
                        "Sistema de inventario para libros"
                    </p>

                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-black">
                        Gestiona tu inventario:
                    </h2>
                    <ul class="max-w-md space-y-1 text-black list-disc list-inside dark:text-gray-600">
                        <li>Evita el quiebre de Stock</li>
                        <li>Controla los ingresos y egresos de tu inventario</li>
                        <li>Registra clientes si lo necesitas</li>
                    </ul>
                    <!-- Botones de login o registro -->
                    <div class="mt-7">
                        
                        @if (Route::has('login'))
                            @auth
                                <a class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400" href="{{ route('login') }}">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        Inicio Sesion
                                    </span>
                                </a>
                                @if (Route::has('register'))
                                    <a class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400" href="{{ route('register') }}">
                                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                            Registro
                                        </span>
                                    </a>
                                @endif
                            @endauth
                        @endif
                        
                    </div>
                </div>
                <img class="rounded-3xl w-auto h-auto bg-center" src="img/inventario.jpg" alt="inventario">
            </div>
        </div>
    </body>
</html>


