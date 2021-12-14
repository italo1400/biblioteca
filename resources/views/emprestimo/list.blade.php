@extends('master')

@section('body')

<div class="container mt-5">
    <form action="{{route('cadastrar_emprestimo')}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="matricula" class="col-sm-1 col-form-label">Funcionário</label>
            <div class="col-sm-3">
                <select class="form-select" name="funcionario_id">
                    @foreach ($funcionarios as $funcionario)
                    <option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
                    @endforeach
                </select>
            </div>
            <label for="oab" class="col-sm-1 col-form-label">Livro</label>
            <div class="col-sm-3">
                <select class="form-select" name="livro_id">
                    @foreach ($livros as $livro)
                    <option value="{{$livro->id}}">{{$livro->nome}}</option>
                    @endforeach
                </select>
            </div>
            <label for="entrega" class="col-sm-1 col-form-label">Entrega</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="entrega" name="entrega">
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <button type="submit" class="btn btn-success">Realizar Empréstimo</button>
            </div>
        </div>
    </form>
    <hr />

    <div class="row">
        <div class="col">
            <table class="table caption-top">
                <caption>Lista de Empréstimos</caption>
                <thead>
                    <tr>
                        <th scope="col" width="80px">#</th>
                        <th scope="col">Funcionario</th>
                        <th scope="col">Livro</th>
                        <th scope="col" width="200px">Empréstimo</th>
                        <th scope="col" width="200px">Entrega</th>
                        <th scope="col" width="230px">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emprestimos as $emprestimo)
                    <tr>
                        <th scope="row">{{$emprestimo->id}}</th>
                        <td>{{$emprestimo->funcionario->nome}}</td>
                        <td>{{$emprestimo->livro->nome}}</td>
                        <td>{{date('d/m/Y H:i', strtotime($emprestimo->created_at))}}</td>
                        <td>{{date('d/m/Y', strtotime($emprestimo->entrega))}}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{'emprestimo/'.$emprestimo->id}}" type="button" class="btn btn-outline-secondary">Devolvido</a>
                                </div>
                                <div class="col">
                                    <form action="{{route('deletar_emprestimo',['id' => $emprestimo->id])}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">Cancelar</button>
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