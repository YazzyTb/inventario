<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        return view('empleados'); // Asegúrate de que el nombre coincida con el archivo empleados.blade.php
    }
}
