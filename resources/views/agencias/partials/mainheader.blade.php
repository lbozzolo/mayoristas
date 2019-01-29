<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <div id="logo">
        <a href="index.html">
            <img src="{{ asset('agencias/img/logo.png') }}" width="333" height="80" data-retina="true" alt="" class="logo_normal">
            <img src="{{ asset('agencias/img/logo_sticky.png') }}" width="333" height="80" data-retina="true" alt="" class="logo_sticky">
        </a>
    </div>

    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            @foreach($navbar as $continente)

                @if($continente->nombre != 'Home')
                    <li {{ (Request::is('continentes/'.$continente->id) ? 'style="color: gray"' : '') }}>
                        <span>
                            <a href="{{ route('continentes.ver', $continente->id) }}">{!! $continente->nombre !!}</a>
                        </span>
                    </li>
                @endif

            @endforeach
            @if(Auth::check())
                <li><span><a href="{{ asset('/auth/logout') }}" class="boton">Cerrar sesión</a></span></li>
            @endif
        </ul>
    </nav>
</header>