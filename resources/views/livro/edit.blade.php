@extends('master')

@section('body')

<div class="container mt-5">
    <form action="{{route('editar_livro',['id' => $livro->id])}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="nome" class="col-sm-1 col-form-label">Livro</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="nome" name="nome" value="{{$livro->nome}}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="autor" class="col-sm-1 col-form-label">Autor</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="autor" name="autor" value="{{$livro->autores}}" required>
            </div>
            <label for="editor" class="col-sm-1 col-form-label">Editor</label>
            <div class="col-sm-5">
                    <input type="text" class="form-control" id="editor" name="editor"  value="{{$livro->editoras}}" required>
                </div>                        
            </div>
            <div class="row">
                <div class="col text-end">
                    <button type="submit" class="btn btn-success">Salvar Livro</button>
                </div>
            </div>
    </form>
</div>
@endsection