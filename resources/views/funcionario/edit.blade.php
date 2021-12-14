@extends('master')

@section('body')

<div class="container mt-5">
    <form action="{{route('editar_funcionario',['id' => $funcionario->id])}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="nome" class="col-sm-1 col-form-label">Funcionário</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="nome" name="nome" value="{{$funcionario->nome}}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="matricula" class="col-sm-1 col-form-label">Matricula</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="matricula" name="matricula" value="{{$funcionario->matricula}}" required>
            </div>
            <label for="OAB" class="col-sm-1 col-form-label">OAB</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="OAB" name="OAB" value="{{$funcionario->OAB}}">
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <button type="submit" class="btn btn-success">Salvar Funcionário</button>
            </div>
        </div>
    </form>
</div>
@endsection