<div x-data="{ open: false }" class="relative">
   <!-- Botón para abrir el sidebar en dispositivos móviles -->
   <button @click="open = !open" class="sm:hidden p-2 text-gray-600 hover:text-gray-800">
       <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
       </svg>
   </button>

   <!-- Sidebar para pantallas grandes -->
   <div class="hidden sm:flex fixed left-0 top-16 z-50 w-64 shadow-lg h-full" style="background-color: #E7DED7">
       <div class="h-full p-4">
           <h2 class="text-lg font-bold">Menú</h2>
           <ul class="space-y-2">
               <li><a href="{{ route('clientes') }}" class="block p-2 hover:bg-gray-200">Clientes</a></li>
               <li><a href="{{ route('empleados') }}" class="block p-2 hover:bg-gray-200">Empleados</a></li>
               
           </ul>
       </div>
   </div>

   <!-- Overlay de fondo para pantallas pequeñas -->
   <div x-show="open" class="fixed inset-0 z-50 transition-opacity bg-gray-800 bg-opacity-50" @click="open = false"></div>

   <!-- Sidebar para pantallas pequeñas -->
   <div class="fixed left-0 top-16 z-50 w-64  shadow-lg transition-transform transform" 
        :class="{'translate-x-0': open, '-translate-x-full': !open}" style="background-color: #E7DED7">
       <div class="h-full p-4">
           <h2 class="text-lg font-bold">Menú</h2>
           <ul class="space-y-2">
               <li><a href="{{ route('clientes') }}" class="block p-2 hover:bg-gray-200">Clientes</a></li>
               <li><a href="{{ route('empleados') }}" class="block p-2 hover:bg-gray-200">Empleados</a></li>
               
           </ul>
       </div>
   </div>
</div>
