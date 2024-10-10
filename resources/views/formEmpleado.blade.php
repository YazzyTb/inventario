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

                <form action="{{ url('/empleados') }}" method="POST" class="space-y-4">
                    @csrf  <!-- Token de seguridad para formularios -->

                    <div>
                        <x-label for="name" value="{{ __('Nombre') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Conttraseña') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <!-- Dropdown de rol -->
                    <div class="mt-4">
                        <x-label for="rol" value="{{ __('Rol') }}" />
                        <select id="rol" name="rol" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            <option value="Administrador">Administrador</option>
                            <option value="Vendedor">Vendedor</option>
                        </select>
                    </div>

                    <!-- Privilegios -->
                    <div class="mt-4">
                        <x-label for="privilegios" value="{{ __('Privilegios') }}" />
                        <div class="flex">
                            <x-input id="privilegios" class="block mt-1 w-full" type="text" name="privilegios" readonly />
                            <button type="button" id="openModal" class="ml-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                    <!-- Modal de Privilegios -->
                    <div id="privilegiosModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
                        <div class="flex items-center justify-center min-h-screen">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                                <h2 class="text-xl font-semibold mb-4">Seleccionar Privilegios</h2>
                                <div class="space-y-2">
                                    <div><input type="checkbox" class="privilegio" value="Gestionar usuarios"> Administrar empleados </div>
                                    <div><input type="checkbox" class="privilegio" value="Gestionar productos"> Realizar descuentos </div>
                                    <div><input type="checkbox" class="privilegio" value="Gestionar ventas"> Comunicación con proveedores</div>
                                    <div><input type="checkbox" class="privilegio" value="Gestionar compras"> Gestionar clientes</div>
                                    <div><input type="checkbox" class="privilegio" value="Gestionar clientes"> Realizar compras</div>
                                    <div><input type="checkbox" class="privilegio" value="Ver reportes"> Realizar ventas</div>
                                    <div><input type="checkbox" class="privilegio" value="Generar facturas"> Administrar inventario</div>
                                    <div><input type="checkbox" class="privilegio" value="Gestionar inventario"> Visualizar inventario</div>
                                    <div><input type="checkbox" class="privilegio" value="Control de caja"> Reporte de ganancia diaria</div>
                                    <div><input type="checkbox" class="privilegio" value="Administrar roles"> Gestionar bitacora</div>
                                    <div><input type="checkbox" class="privilegio" value="Administrar promociones"> Administrar promociones</div>
                                </div>
                                <div class="flex justify-end mt-4">
                                    <button id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Cancelar</button>
                                    <button id="savePrivileges" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>                    

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />
                                </div>
                            </x-label>
                        </div>
                    @endif
        
                    <div class="flex items-center justify-end mt-4">
        
                        <x-button class="ms-4">
                            {{ __('Registrar') }}
                        </x-button>
                    </div>

                </form>
            </div>
        </div>

        @livewireScripts
    </body>
</html>

<script>
    // Abrir el modal
    document.getElementById('openModal').addEventListener('click', function () {
        document.getElementById('privilegiosModal').classList.remove('hidden');
    });

    // Cerrar el modal
    document.getElementById('closeModal').addEventListener('click', function () {
        document.getElementById('privilegiosModal').classList.add('hidden');
    });

    // Guardar privilegios seleccionados
    document.getElementById('savePrivileges').addEventListener('click', function () {
        const checkboxes = document.querySelectorAll('.privilegio:checked');
        let selectedPrivileges = [];

        checkboxes.forEach((checkbox) => {
            selectedPrivileges.push(checkbox.value);
        });

        document.getElementById('privilegios').value = selectedPrivileges.join(', ');
        document.getElementById('privilegiosModal').classList.add('hidden');
    });
</script>

