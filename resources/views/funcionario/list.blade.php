@extends('master')

@section('body')
<div class="container mt-5">
    <form action="{{route('cadastrar_funcionario')}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="nome" class="col-sm-1 col-form-label">Nome</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="matricula" class="col-sm-1 col-form-label">Matricula</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="matricula" name="matricula">
            </div>
            <label for="oab" class="col-sm-1 col-form-label">OAB</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="oab" name="oab">
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <button type="submit" class="btn btn-success">Cadastrar Funcionário</button>
            </div>
        </div>
    </form>
    <hr />
    <div class="row">
        <div class="col">
            <table class="table caption-top">
                <caption>Lista de Funcionários</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Matrícula</th>
                        <th scope="col">OAB</th>
                        <th scope="col" width="200px">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                    <tr>
                        <th scope="row">{{$funcionario->id}}</th>
                        <td>{{$funcionario->nome}}</td>
                        <td>{{$funcionario->matricula}}</td>
                        <td>{{$funcionario->OAB}}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{'funcionario/'.$funcionario->id}}" type="button" class="btn btn-outline-secondary">Editar</a>
                                </div>
                                <div class="col">
                                    <form action="{{route('deletar_funcionario',['id' => $funcionario->id])}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">Remover</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection