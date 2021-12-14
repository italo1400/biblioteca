<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema de Biblioteca para Escritório de Advocacia</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-4 text-center">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Iniciar Sessão</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="post" action="{{route('auth')}}">
                            @csrf
                            <div class="row">
                                <label for="staticEmail" class="col-sm-3 col-form-label mb-3">Email:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="staticEmail">
                                </div>
                            </div>
                            <div class="row">
                                <label for="inputPassword" class="col-sm-3 col-form-label mb-3">Senha:</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Login</button>
                            <button type="button" class="w-100 btn btn-lg btn-primary mt-1">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>