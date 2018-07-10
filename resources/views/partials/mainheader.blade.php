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

                    @if($continente->nombre != 'Home')
                        <li {{ (Request::is('continentes/'.$continente->id) ? 'class=violet' : 'class=green') }}>
                            <span class="menufilter"></span>
                            <a href="{{ route('continentes.ver', $continente->id) }}">{!! strtoupper($continente->nombre) !!}</a>
                        </li>
                    @endif

                @endforeach

                @if(Auth::user()->rol == '0' || Auth::user()->rol == '1')
                <li class="orange">
                    <span class="menufilter"></span>
                    <a href="{{ route('admin.panel', 'continentes') }}">ADMIN</a>
                </li>
                @endif
                @if(Auth::check())
                <li>
                    <a href="{{ asset('/auth/logout') }}" class="boton">Cerrar sesión</a>
                </li>
                @endif

            </ul>

            <select id="tinynav1" class="tinynav tinynav1">

                @foreach($navbar as $continente)

                    @if($continente->nombre != 'Home')
                        <option value="{{ route('continentes.ver', $continente->id) }}">

                            {!! strtoupper($continente->nombre) !!}
                        </option>
                    @endif

                @endforeach

                @if(Auth::user()->rol == '0' || Auth::user()->rol == '1')
                    <option class="orange">
                        <span class="menufilter"></span>
                        <a href="{{ route('admin.panel', 'continentes') }}">ADMIN</a>
                    </option>
                @endif
                @if(Auth::check())
                    <option>
                        <a href="{{ asset('/auth/logout') }}" class="boton">Cerrar sesión</a>
                    </option>
                @endif

            </select>
            <!--end navigationmenu-->

        </div>
        <!--end navigation-->

    </div>
    <!--end container-->


</header>
<!--end header-->

<div class="divider"><span></span></div>