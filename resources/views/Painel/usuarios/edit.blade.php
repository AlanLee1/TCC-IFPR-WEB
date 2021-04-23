@extends('Painel.Layout.index')

@section('content')
    <section class="content">
        <section class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Alterar Usuário</h3>
                      </div>
                      <form role="form" method="POST" action="/Painel/Usuarios/edit/{{$usuario['_id']}}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input value="{{ $usuario['nome']}}" type="text" class="form-control" id="nome" name="nome" required>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input value="{{ $usuario['email']}}" type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input value="{{ $usuario['telefone']}}" type="text" class="form-control" id="telefone" name="telefone" required>
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input value="{{ $usuario['senha']}}" type="password" class="form-control" id="senha" name="senha" required>
                            </div>

                        </div>
                        <div class="card-footer" style="text-align: center;">
                            <a href="{{ route('Painel.Usuarios.list')}}" class="btn btn-danger btn-md">Voltar</a>
                            <button type="submit" class="btn btn-primary">Alterar</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
