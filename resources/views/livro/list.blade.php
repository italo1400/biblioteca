@extends('master')

@section('body')
        <div class="container mt-5">
                <form action="{{route('cadastrar_livro')}}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nome" class="col-sm-1 col-form-label">Livro</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="autor" class="col-sm-1 col-form-label">Autor</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="autor" name="autor" required>
                        </div>
                        <label for="editor" class="col-sm-1 col-form-label">Editor</label>
                        <div class="col-sm-5">
                             <input type="text" class="form-control" id="editor" name="editor" required>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <button type="submit" class="btn btn-success">Cadastrar Livro</button>
                            </div>
                        </div>
                    </form>
            <hr/>
            <div class="row">
                <div class="col">
                <table class="table caption-top">
                    <caption>Lista de Livros</caption>                    
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editor</th>
                            <th scope="col" width="200px">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                        <tr>
                            <th scope="row">{{$livro->id}}</th>
                            <td>{{$livro->nome}}</td>
                            <td>{{$livro->autores}}</td>
                            <td>{{$livro->editoras}}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{'livro/'.$livro->id}}" type="button" class="btn btn-outline-secondary">Editar</a>
                                    </div>
                                    <div class="col">
                                    <form action="{{route('deletar_livro',['id' => $livro->id])}}" method="post">
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