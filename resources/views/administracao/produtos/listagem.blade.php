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
                            <th scope="col">Descrição</th>
                            <th scope="col">Estoque inical</th>
                            <th scope="col">Estoque atual</th>
                            <th scope="col">Preço de compra</th>
                            <th scope="col">Preço de venda</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col" width="200px">Opções</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($produtos as $produto)
                            <tr>
                                <th scope="row">{{ $produto->code }}</th>
                                <td>{{ $produto->description }}</td>
                                <td>{{ $produto->stock_in }}</td>
                                <td>{{ $produto->stock_out }}</td>
                                <td>R$ {{ number_format($produto->price_in, 2, ',', ' '); }}</td>
                                <td>R$ {{ number_format($produto->price_out, 2, ',', ' '); }}</td>
                                <td>{{ $produto->provider->name }}</td>
                                <td>
                                  <a href="{{ route('produto.show', ['id' => $produto->id]) }}" class="btn btn-primary me-2"><i class="bi-eye"></i></button>
                                  <a href="{{ route('produto.edit', ['id' => $produto->id]) }}" class="btn btn-success me-2"><i class="bi-pencil"></i></button>
                                  <a href="{{ route('produto.destroy', ['id' => $produto->id]) }}" class="btn btn-danger me-2"> <i class="bi-trash"></i></button>
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
