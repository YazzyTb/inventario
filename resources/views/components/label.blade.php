@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>







<!-- resources/views/components/label.blade.php -->
@props(['for', 'value'])

<label for="{{ $for }}" class="block text-sm font-medium text-gray-700">{{ $value }}</label>



<!-- resources/views/components/error.blade.php -->
@props(['messages'])

@if($messages)
    <div class="text-red-600 text-sm">
        @foreach($messages as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>
@endif
