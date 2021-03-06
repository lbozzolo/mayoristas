<ul class="list-unstyled">
    <li><a href="{{ route('admin.panel', 'home') }}" style="color: {{ (Request::is('admin/home')? '#1ABC9C' : 'gray') }}">Home</a></li>
    <li><a href="{{ route('admin.panel', 'continentes') }}" style="color: {{ (Request::is('admin/continentes')? '#1ABC9C' : 'gray') }}">Continentes</a></li>
    <li><a href="{{ route('admin.panel', 'paquetes') }}" style="color: {{ (Request::is('admin/paquetes')? '#1ABC9C' : 'gray') }}">Paquetes</a></li>
    <li ><a href="{{ route('admin.panel', 'opciones') }}" style="color: {{ (Request::is('admin/opciones')|| (Request::is('admin/continente/*') || (Request::is('admin/opcion/*')))? '#1ABC9C' : 'gray') }}">Opciones</a></li>
    <li><a href="{{ route('admin.panel', 'imagenes') }}" style="color: {{ (Request::is('admin/imagenes')? '#1ABC9C' : 'gray') }}">Imagenes</a></li>
    @if(Auth::user()->rol == 0 || Auth::user()->rol == 1)
    <li><a href="{{ route('admin.panel', 'usuarios') }}" style="color: {{ (Request::is('admin/usuarios*')? '#1ABC9C' : 'gray') }}">Usuarios</a></li>
    @endif
</ul>