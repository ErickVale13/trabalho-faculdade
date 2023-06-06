@extends('layouts.principal')

@section('content')

        <style>
        *{
            background: #b1ba8e;
            color: #fff;
        }

        .titulo-pagina{
            font-weight: bold;
            color: #7a6448;
        }

        .btn1{
            border-radius: 15px;
            background: #7a6448;
            color: #fff;
        }
    </style>

    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form class="formulario-cadastro" method="POST" action="{{ route('fornecedor.store') }}">
                        @csrf
                        <div class="mb-3">
                            <h1 class="titulo-pagina">Cadastrar fornecedor</h1>
                        </div>
                        <div class="mb-3">
                          <label for="usuario" class="form-label">Código</label>
                          <input type="text" class="form-control" id="code" name="code">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nome do fornecedor</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">CNPJ</label>
                            <input type="text" class="form-control" id="document" name="document">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <button type="submit" class="btn btn-primary btn1">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
