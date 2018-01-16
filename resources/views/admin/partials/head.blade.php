<div class="pull-right">
    <ul class="list-unstyled">
        <li>
            <a href="{{ route('admin.usuarios.perfil', Auth::user()->id) }}" title="ver perfil">
                <span class="text-muted pull-right">{!! Auth::user()->fullname !!}</span>
            </a>
        </li>
        <li><span class="pull-right"><a href="{{ route('auth.logout') }}">cerrar sesión</a></span></li>
    </ul>
</div>

<h2 style="margin-bottom: 20px">
    <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" style="background-color: gray; padding: 10px; margin-right: 20px; border-radius: 5px"></a>
    Panel de control
</h2>
<hr>
