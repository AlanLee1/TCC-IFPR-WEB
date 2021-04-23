@extends('Painel.Layout.index')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="form-group" style="text-align: center;">
                            <a href="{{route('Painel.Incidentes.create')}}">
                                <button id="btn-salvar" type="button" class="btn btn-success btn-rounded w-md">
                                    Novo
                                </button>
                            </a>
                        </div>
                        <h3 class="card-title">Tabela de Incidentes</h3>

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
                            <th>Tipo</th>
                            <th>Bairro</th>
                            <th>Logradouro</th>
                            <th style="text-align: center">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_incidente as $incidente)
                                <tr>
                                    <td>{{$incidente['_id']}}</td>
                                    <td>{{$incidente['tipo']}}</td>
                                    <td>{{$incidente['bairro']}}</td>
                                    <td>{{$incidente['logradouro']}}</td>
                                    <td style="text-align: center">
                                        <a href="/Painel/Incidentes/list/show/{{ $incidente['_id'] }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="/Painel/Incidentes/list/edit/{{ $incidente['_id'] }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <a class="btn">
                                            <form role="form" method="POST" action="/Painel/Incidentes/destroy/{{$incidente['_id']}}">
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
