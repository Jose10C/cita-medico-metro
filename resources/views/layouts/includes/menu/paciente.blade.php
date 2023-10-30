<li class="{{ request()->routeIs('create-cita') ? 'active' : '' }}"><a class="nav-link" href="{{ route('create-cita') }}"><i class="fas fa-heartbeat"></i> <span>Reservar Cita</span></a></li>
<li class="{{ request()->routeIs('mis-citas') ? 'active' : '' }}"><a class="nav-link" href="{{ route('mis-citas') }}"><i class="far fa-clipboard"></i> <span>Mis Citas</span></a></li>
