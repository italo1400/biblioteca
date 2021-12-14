<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function create(Request $request)
    {
        Livro::create([
            'nome' => $request->nome,
            'autores' => $request->autor,
            'editoras' => $request->editor,
        ]);

        return redirect('/livro');
    }

    public function list()
    {
        $livros = Livro::all();
        return view('livro.list', ['livros' => $livros]);
    }

    public function detail($id)
    {
        $livro = Livro::find($id);
        return view('livro.edit', ['livro' => $livro]);
    }

    public function edit(Request $request, $id)
    {
        $livro = Livro::find($id);
        $livro->update([
            'nome' => $request->nome,
            'autores' => $request->autor,
            'editoras' => $request->editor,
        ]);
        return redirect('/livro');
    }

    public function delete($id)
    {
        $livro = Livro::find($id);
        $livro->delete();
        return redirect('/livro');
    }
}
