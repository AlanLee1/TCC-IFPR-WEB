@extends('Painel.Layout.index')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Caixa de Incidentes -->
            <div class="row">

                <div class="col-lg-3 col-6">
                    <!-- Caixa de Incidentes -->
                    <div class="small-box bg-gradient-danger">
                        <div class="inner">
                            <h3>{{$totalIncidente}}</h3>
                            <h4>Incidentes</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <a href="{{ route('Painel.Incidentes.index')}}" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- Caixa de Usuários -->
                    <div class="small-box bg-gradient-primary">
                        <div class="inner">
                            <h3>{{$totalUsuario}}</h3>
                            <h4>Usuários</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('Painel.Usuarios.index')}}" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            <!-- /Caixa -->
        </div>
    </section>
@endsection

