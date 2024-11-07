<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class RegistroUsuarios extends Controller
{
    public function index()
    {
        return view('pages.Principal');
    }
    public function create()
    {
        return view('pages.RegistrarUsuarios');
    }
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required|numeric|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|min:1000|max:' . date('Y'),
            'email' => 'required|email',
        ]);
        // 
        return redirect()->route('principal')->with('success', 'Libro guardado correctamente');
    }
}
