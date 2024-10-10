<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // Mostrar la tabla de clientes
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    // Mostrar el formulario de registro de clientes
    public function create()
    {
        return view('formCliente');
    }

    // Guardar el nuevo cliente en la base de datos
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'puntos' => 'required|int|max:100',
        ]);

        // Crear un nuevo cliente
        Cliente::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'puntos' => $request->input('puntos'),
        ]);

        // Redirigir a la tabla de clientes
        return redirect('/clientes')->with('success', 'Cliente registrado correctamente.');
    }
}
