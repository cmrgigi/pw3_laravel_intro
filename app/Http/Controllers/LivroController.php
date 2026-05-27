<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livro = Livro::orderBy('autor')->get();
        return view('livro.index', compact('livro'));
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => 'required|min:3',
            'autor' => 'required|min:3',
            'ano_publicacao' => 'required|integer|min:0',
        ]);

        Livro::create($dados);

        return redirect('/livro');
    }
}
