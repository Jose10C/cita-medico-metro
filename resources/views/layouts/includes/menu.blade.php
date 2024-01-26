<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">SIS {{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">SIS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Incio</li>
            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}"> <i class="	fas fa-home"></i> <span>Dashboard</span></a>
            </li>

            <li class="menu-header">Menu</li>
            @include('layouts.includes.menu.'.auth()->user()->rol)

            @if(auth()->user()->rol == 'admin')
            <li class="menu-header">Reportes</li>
            <li class="{{ request()->routeIs('reports.citas.line') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('reports.citas.line')}}"> <i class="fas fa-id-card-alt"></i> <span>Frecuencia Citas</span> </a>
            </li>
            <li class="{{ request()->routeIs('reports.medicos.column') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('reports.medicos.column')}}"> <i class="fas fa-user-md"></i> <span>Desempeño Médicos</span> </a>
            </li>
            @endif
            <li class="menu-header">Calendario</li>
            <li class="{{ request()->routeIs('mi-calendario') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('mi-calendario')}}"> <i class="fas fa-calendar-alt"></i> <span>Calendario</span> </a>
            </li>
            <li class="menu-header">Ayuda</li>
            <li class=""><a class="nav-link" href="#"><i class="fas fa-clipboard"></i> <span>Ayuda</span></a></li>
            
        </ul>

        <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Salir
            </a>
        </div> -->
    </aside>
</div>