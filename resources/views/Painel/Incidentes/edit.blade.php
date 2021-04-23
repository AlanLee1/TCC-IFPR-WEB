@extends('Painel.Layout.index')

@section('content')
    <section class="content">
        <section class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Alterar Incidente</h3>
                      </div>
                      <form role="form" method="POST" action="/Painel/Incidentes/edit/{{$incidente['_id']}}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <input value="{{ $incidente['tipo']}}" type="text" class="form-control" id="tipo" name="tipo" required>
                            </div>

                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input value="{{ $incidente['bairro']}}" type="text" class="form-control" id="bairro" name="bairro" required>
                            </div>

                            <div class="form-group">
                                <label for="logradouro">Rua</label>
                                <input value="{{ $incidente['logradouro']}}" type="text" class="form-control" id="logradouro" name="logradouro" required>
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input value="{{ $incidente['descricao']}}" type="text" class="form-control" id="descricao" name="descricao" required>
                            </div>

                        </div>
                        <div class="card-footer" style="text-align: center;">
                            <a href="{{ route('Painel.Incidentes.list')}}" class="btn btn-danger btn-md">Voltar</a>
                            <button type="submit" class="btn btn-primary">Alterar</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
