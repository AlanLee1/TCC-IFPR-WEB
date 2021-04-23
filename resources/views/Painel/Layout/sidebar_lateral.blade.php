<!-- Barra Lateral Principal -->
<!-- sidebar-light-maroon -->
<!-- sidebar-dark-primary -->
<!-- sidebar-light -->

<!--
.sidebar-dark-*
.sidebar-light-*
-->
<aside class="main-sidebar sidebar-light-purple elevation-4">

    <!-- Logo -->
    <a href="{{ route('Painel.index')}}" class="brand-link">
        <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Conserta Palmas</span>
    </a>
    <!-- /Logo -->

    <!-- Barra Lateral -->
    <div class="sidebar">

        <!-- Painel do usuário da barra lateral (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrador</a>
            </div>
        </div>

        <!-- Menu da barra lateral -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- 1 item -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('Painel.index')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Painel de Controle</p>
                    </a>
                </li>
                {{-- <!-- 2 item -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Incidentes</p>
                    </a>
                </li> --}}

                <!-- Tabelas -->
                <li class="nav-header">TABELAS</li>
                <!-- 1 item -->
                <li class="nav-item">
                    <a href="{{ route('Painel.Incidentes.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Incidentes<span class="badge badge-danger right">{{ $totalIncidente ?? '' }}</span></p>
                    </a>
                </li>
                <!-- 2 item -->
                <li class="nav-item">
                    <a href="{{ route('Painel.Usuarios.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Usuários<span class="badge badge-primary right">{{$totalUsuario ?? ''}}</span></p>
                    </a>
                </li>

                <!-- Serviços -->
                <li class="nav-header">SERVIÇOS</li>
                <!-- 1 item -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Urgente</p>
                    </a>
                </li>
                <!-- 2 item -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Aviso</p>
                    </a>
                </li>
                <!-- 3 item -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informativo</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /Menu da barra lateral -->
    </div>
    <!-- /Barra Lateral -->
</aside>
<!-- /Barra Lateral Principal -->
