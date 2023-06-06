@extends('layouts.principal')

@section('content')

  <style>

        tr{
            text-align: center;
            background: #cdb28a;
        }

        th{
            text-align: center;
            background: #d4ddb1;
        }
    </style>
    
    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-12">
                    @if(\Session::has('sucesso'))
                      <div class="alert alert-success" role="alert">
                        <strong>{{ \Session::get('sucesso') }}</strong>
                      </div>
                    @endif
                    
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Endereço</th>
                            <th scope="col" width="200px">Opções</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <th scope="row">{{ $fornecedor->code }}</th>
                                <td>{{ $fornecedor->name }}</td>
                                <td>{{ $fornecedor->document }}</td>
                                <td>{{ $fornecedor->phone }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td>{{ $fornecedor->address }}</td>
                                <td>
                                  <a href="{{ route('fornecedor.show', ['id' => $fornecedor->id]) }}" class="btn btn-primary me-2"><i class="bi-eye"></i></button>
                                  <a href="{{ route('fornecedor.edit', ['id' => $fornecedor->id]) }}" class="btn btn-success me-2"><i class="bi-pencil"></i></button>
                                  <a href="{{ route('fornecedor.destroy', ['id' => $fornecedor->id]) }}" class="btn btn-danger me-2"> <i class="bi-trash"></i></button>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
