<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Auth;

class EmprestimosController extends Controller
{
    public function create(Request $request)
    {
        Emprestimo::create([
            'funcionario_id' => $request->funcionario_id,
            'livro_id' => $request->livro_id,
            'entrega' => $request->entrega
        ]);
        return redirect('/');
    }
    
    public function list()
    {
        //dd(Auth::check());
        $emprestimos  = Emprestimo::with('Funcionario','Livro')->get();

        $livros = Livro::all();
        $funcionarios = Funcionario::all();

        return view('emprestimo.list',['emprestimos' => $emprestimos, 'livros' => $livros, 'funcionarios' => $funcionarios]);
    }

    public function delete($id)
    {
        $emprestimo = Emprestimo::find($id);
        $emprestimo->delete();
        return redirect('/');
    }
}
