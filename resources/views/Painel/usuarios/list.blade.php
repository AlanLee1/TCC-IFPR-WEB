@extends('Painel.Layout.index')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="form-group" style="text-align: center;">
                            <a href="{{route('Painel.Usuarios.create')}}">
                                <button id="btn-salvar" type="button" class="btn btn-success btn-rounded w-md">
                                    Novo
                                </button>
                            </a>
                        </div>
                        <h3 class="card-title">Tabela de Usuarios</h3>

                        <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Busca">

                            <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th style="text-align: center">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_usuario as $usuario)
                                <tr>
                                    <td>{{$usuario['_id']}}</td>
                                    <td>{{$usuario['nome']}}</td>
                                    <td>{{$usuario['telefone']}}</td>
                                    <td style="text-align: center">
                                        <a href="/Painel/Usuarios/list/edit/{{ $usuario['_id'] }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <a class="btn">
                                            <form role="form" method="POST" action="/Painel/Usuarios/destroy/{{$usuario['_id']}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
