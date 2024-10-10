@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>









<!-- resources/views/components/input.blade.php -->
@props(['type' => 'text', 'name', 'value' => '', 'required' => false])

<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}" {{ $required ? 'required' : '' }} class="border rounded-md w-full px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" />
-->