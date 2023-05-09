@extends('layouts.principal')

@section('content')
    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form class="formulario-cadastro">
                        <div class="mb-3">
                            <h1 class="titulo-pagina">Visualizar fornecedor</h1>
                        </div>
                        <div class="mb-3">
                          <label for="usuario" class="form-label">Código</label>
                          <input type="text" class="form-control" id="code" name="code" disabled value="{{ $fornecedor->code }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nome do fornecedor</label>
                            <input type="text" class="form-control" id="name" name="name" disabled value="{{ $fornecedor->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">CNPJ</label>
                            <input type="text" class="form-control" id="document" name="document" disabled value="{{ $fornecedor->document }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone" disabled value="{{ $fornecedor->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" disabled value="{{ $fornecedor->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" name="address" disabled value="{{ $fornecedor->address }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
