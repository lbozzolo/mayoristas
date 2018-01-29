{{--<header id="navigationmenu" class="fade-down animate1 navigationmenudark">--}}


<header id="navigationmenu" class=" animate1 navigationmenudark">

    <!--start left menu close-->

    <!--end left menu close-->

    <!--start container-->
    <div class="container">

        <!--start navigation-->
        <div class="grid_12 gridnavigation">

            <a href="index.php">
                <img class="logo animate4" alt="" src="img/logo01.png" width="150">
            </a>
            <!--start navigation-->
            <ul class="sf-menu" id="nav">

                @foreach($navbar as $continente)

                    <li {{ (Request::is('continentes/'.$continente->id) ? 'class=violet' : 'class=green') }}>
                        <span class="menufilter"></span>
                        <a href="{{ route('continentes.ver', $continente->id) }}">{!! strtoupper($continente->nombre) !!}</a>
                    </li>

                @endforeach

                @if(Auth::user()->rol == '0' || Auth::user()->rol == '1')
                <li class="orange">
                    <span class="menufilter"></span>
                    <a href="{{ route('admin.panel', 'continentes') }}">ADMIN</a>
                </li>
                <li>
                    <a href="{{ asset('/auth/logout') }}" class="boton">Cerrar sesión</a>
                </li>
                @endif


            </ul>
            <!--end navigationmenu-->

        </div>
        <!--end navigation-->

    </div>
    <!--end container-->


</header>
<!--end header-->

<div class="divider"><span></span></div>