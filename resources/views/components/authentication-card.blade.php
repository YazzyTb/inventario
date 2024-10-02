<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: url('{{ asset('images/fondo.jpg') }}'); background-repeat: repeat; background-size: cover;">

    

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-transparent bg-opacity-30 backdrop-blur-lg border-2 border-white/20 shadow-md overflow-hidden sm:rounded-lg " style="backdrop-filter: blur(8px);">
        <div class="flex justify-center items-center">
            {{ $logo }}
        </div>
        {{ $slot }}
    </div>
</div>
