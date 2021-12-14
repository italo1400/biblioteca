<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionariosController extends Controller
{
    public function create(Request $request)
    {
        Funcionario::create([
            'nome' => $request->nome,
            'matricula' => $request->matricula,
            'OAB' => $request->oab,
        ]);

        return redirect('/funcionario');
    }

    public function edit(Request $request,$id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->update([
            'nome' =>$request->nome,
            'matricula' => $request->matricula,
            'OAB' => $request->OAB
        ]);
        return redirect('/funcionario');
    }

    public function detail($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionario.edit', ['funcionario' => $funcionario]);
    }

    public function list()
    {
        $funcionarios = Funcionario::all();
        return view('funcionario.list',['funcionarios'=>$funcionarios]);
    }

    public function delete($id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->delete();
        return redirect('/funcionario');
    }
}
