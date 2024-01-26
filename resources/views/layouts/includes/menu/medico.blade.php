<li class="{{ Request::route()->getName() == 'edit-horario' ? 'active' : '' }}"><a class="nav-link" href="{{ route('edit-horario') }}"><i class="fas fa-clock"></i> <span>Gestion de Horarios</span></a></li>
<li class="{{ Request::route()->getName() == 'mis-citas' ? 'active' : '' }}"><a class="nav-link" href="{{ route('mis-citas') }}"><i class="fas fa-clipboard"></i> <span>Mis Citas</span></a></li>

<li class="menu-header">Complementos</li>
<li class="{{ Request::route()->getName() == 'medico-crear-cita' ? 'active' : '' }}"><a class="nav-link" href="{{ route('medico-crear-cita') }}"><i class="fas fa-clipboard"></i> <span>Crear Cita</span></a></li>