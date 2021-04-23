@extends('Painel.Layout.index')

@section('content')
    <section class="content">
        <section class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Cadastrar Incidente</h3>
                      </div>
                      <form role="form" method="POST" action="{{ route('Painel.Incidentes.store') }}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ex: Buraco na rua" required>
                            </div>

                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Ex: Centro" required>
                            </div>

                            <div class="form-group">
                                <label for="logradouro">Rua</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Ex: Rua, Avenida, etc" required>
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input  type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" required>
                            </div>

                        </div>
                        <div class="card-footer" style="text-align: center;">
                            <a href="{{ route('Painel.Incidentes.list')}}" class="btn btn-danger btn-md">Voltar</a>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
