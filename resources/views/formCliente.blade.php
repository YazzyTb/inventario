@extends('layouts.app')

@section('content')
    <h1>Registrar Nuevo Cliente</h1>

    <form action="{{ url('/clientes') }}" method="POST">
        @csrf  <!-- Token de seguridad para formularios -->

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="puntos">Teléfono:</label>
        <input type="text" id="puntos" name="puntos" required>
        <br>

        <button type="submit">Registrar Cliente</button>
    </form>
@endsection
