@extends('layouts.autenticacao')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="formulario-login" method="POST" action="{{ route('login.acao') }}">
                    @csrf
                    <div class="mb-3">
                        <h1 class="titulo-pagina">Login</h1>
                        <p class="descricao-pagina">Bem-vindo ao portal, efetue o login para acessar as funcionalidades.</p>
                    </div>
                    <div class="mb-3">
                      <label for="usuario" class="form-label">Usuário</label>
                      <input type="text" class="form-control" id="usuario" aria-describedby="ajudaUsuario" name="usuario">
                    </div>
                    <div class="mb-3">
                      <label for="senha" class="form-label">Senha</label>
                      <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
            <div class="col-md-6 offset-md-3 text-center">
                <p class="texto-reservado">Todos os direitos reservados</p>
            </div>
        </div>
    </div>
@stop
