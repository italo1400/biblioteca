<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sistema de Biblioteca para Escritório de Advocacia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Empréstimos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/livro">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/funcionario">Funcionários</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <form action="logout" method="POST">
                        @csrf
                        <button type="submit" @onclick="event.preventDefault();this.closet('form').submit();" class="btn btn-sm btn-outline-secondary" type="button">Encerrar Sessão</button>
                    </form>
                </span>
                </div>
            </div>
        </nav>
            @yield('header')
            @yield('body')
            @yield('footer')
    </body>
</html>
