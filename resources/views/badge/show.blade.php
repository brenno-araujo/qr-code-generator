@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizando crachá</title>
</head>

@section('content')
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Buscar cadastro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Visualizar cadastros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Editar cadastros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Cadsatrar</a>
        </li>
    </ul>

    <div class="container text-center p-4">
        <h3>Visualizador de crachá</h3>
    </div>

    <div class="container d-flex align-items-center justify-content-center">
        <div class="card"
            style="width: 250; height: 370; background-color: rgba(128, 128, 128, 0.699); color: white">
            
            <div class="text-center">
                <img class="w-50" src="{{ asset('img/logo.svg') }}">
            </div>

            <hr class="mt-0">

            <div class="text-center">
                <img style="width: 30%" class="shadow-lg rounded-circle" src="{{ asset('img/usuario.jpg') }}">
            </div>

            <div class="p-2 text-center" style="font-size: 12px">
                <p class="text-uppercase fw-bold mb-1">Emersson Cardim Mota</p>
                <p class="text-uppercase mb-1">Garoto de Programa</p>
            </div>

            <hr>

            <div class="d-flex justify-content-center align-items-center">
                <div class="card" style="width: 90px; height: 90px">
                    <img src="{{route('code')}}" alt="" width="100%" height="100%">
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
