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
        

            @include('sidebar')
            <div class="flex-grow p-4 ml-[250px] sm:ml-0 sm:pl-4" style="margin-top: 64px;"> <!-- Añadir margen superior para el navbar -->
                <h1>hola</h1>
        @livewireScripts
        
        </div>
        </div>

        

    </body>
</html>
