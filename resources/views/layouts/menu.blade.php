<header class="header-c" id="header">
    <nav class="nav-c">
        <a href="https://culking.com/" class="nav-logo-c"><img src="https://culking.com/img/sys/Logo9.png" alt="" height="40"
                width="40">CULKING</a>
        <div class="nav-menu-c" id="navMenu">
            <ul class="nav-list-c">
                <li class="nav-item-c">
                    <a href="/" class="nav-link-c active-link-c">
                        <i class='bx bx-home-alt nav-icon-c'></i>
                        <span class="nav-name-c">Inicio</span>
                    </a>

                </li>
                <li class="nav-item-c">
                    <a href="/desafios" class="nav-link-c">
                        <i class='bx bx-notepad nav-icon-c'></i>
                        <span class="nav-name-c">Desafíos</span>
                    </a>
                </li>
                {{-- <li class="nav-item-c">
                    <a href="/users" class="nav-link-c">
                        <i class='bx bx-shield-quarter nav-icon-c'></i>
                        <span class="nav-name-c">Roles</span>
                    </a>
                </li>
                <li class="nav-item-c">
                    <a href="/users" class="nav-link-c">
                        <i class='bx bx-shield-quarter nav-icon-c'></i>
                        <span class="nav-name-c">Usuarios</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item-c">
                    <a href="/competiciones" class="nav-link-c">
                        <i class='bx bx-trophy nav-icon-c'></i>
                        <span class="nav-name-c">Torneos</span>
                    </a>
                </li> --}}
                <li class="nav-item-c" id="themeButton">
                    <a class="nav-link-c">
                        <i class='bx bx-cog nav-icon-c'></i>
                        <span class="nav-name-c">Ajustes</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="item-menu">
                            <span class="item-menu-link">Cambiar tema</span>
                        </li>
                        <li class="item-menu">
                            <label class="theme-switch">
                                <input type="checkbox" class="item-menu-link">
                                <span class="slider round"></span>
                            </label>
                        </li>
                    </ul>
                    {{-- <a href="#contact" class="nav-link-c">
                        <i class='bx bxs-moon nav-icon-c' id="darkIcon"></i>
                        <span class="nav-name-c">Ajustes</span>
                    </a>
                    <a href="#contact" class="nav-link-c">
                        <i class='bx bx-cog nav-icon-c' id="lightIcon"></i>
                    </a> --}}
                </li>

            </ul>

        </div>
        @guest
            @php
                $dev = env('APP_ENV');
            @endphp
            @if ($dev == 'local')
                <a class="btn btn-outline-secondary btn-sm me-2" href="/login">{{ __('Iniciar sesión') }}</a>
            @else
                <a class="btn btn-outline-secondary btn-sm me-2"
                    href="https://cuenta.culking.com/">{{ __('Iniciar sesión') }}</a>
            @endif
        @else
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <small>{{Auth::user()->username}}</small>
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle">

            </a>
            <ul class="dropdown-menu text-small shadow dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item">

                    <a href="https://cuenta.culking.com/" title="Cuenta"
                        class="btn btn-secondary btn-circle btn-circle-lg m-1 mt-2">
                        <i class='bx bxs-user-circle'></i>
                        <span class="newest-review-title">Cuenta</span>
                    </a>
                    <!-- https://reserva.culking.com/ -->
                    <a href="https://cuenta.culking.com/" title="Reservación de la cancha"
                        class="btn btn-light btn-circle btn-circle-lg m-1 mt-2 disabled">
                        <i class='bx bx-task'></i>
                        <span class="newest-review-title">Reservar</span>
                    </a>
                    <a href="https://deporte.culking.com/" title="Eventos deportivos"
                        class="btn btn-danger btn-circle btn-circle-lg m-1 mt-2 disabled">
                        <i class='bx bx-run'></i>
                        <span class="newest-review-title">Deporte</span>
                    </a>
                    <!-- https://shop.culking.com/ -->
                    <a href="#" title="Tienda" class="btn btn-success btn-circle btn-circle-lg m-1 mt-2 disabled">
                        <i class='bx bxs-cart'></i>
                        <span class="newest-review-title">Tienda</span>
                    </a>
                    <!-- https://trabajos.culking.com/ -->
                    <a href="https://trabajos.culking.com" title="Trabajos publicados"
                        class="btn btn-warning btn-circle btn-circle-lg m-1 mt-2">
                        <i class='bx bx-wrench'></i>
                        <span class="newest-review-title">Trabajos</span>
                    </a>

                    <!-- https://servicios.culking.com/ -->
                    <a href="#" title="Publicaciones de Servicios"
                        class="btn btn-info btn-circle btn-circle-lg m-1 mt-2 disabled">
                        <i class='bx bxs-megaphone'></i>
                        <span class="newest-review-title">Avisos</span>
                    </a>

                    <!-- https://educacion.culking.com/ -->
                    <a href="#" title="Educación"
                        class="btn btn-primary btn-circle btn-circle-lg m-1 mt-2 disabled">
                        <i class='bx bxs-graduation'></i>
                        <span class="newest-review-title">Educación</span>
                    </a>
                    <!-- https://courses.culking.com/ -->
                    <a href="#" title="Cursos" class="btn btn-dark btn-circle btn-circle-lg m-1 mt-2 disabled">
                        <i class='bx bxl-discourse'></i>
                        <span class="newest-review-title">Cursos</span>
                    </a>
                    <!-- https://noticias.culking.com/ -->
                    <a href="#" title="Noticias"
                        class="btn btn-secondary btn-circle btn-circle-lg m-1 mt-2 disabled">
                        <i class='bx bx-news'></i>
                        <span class="newest-review-title">Noticias</span>
                    </a>
                </a>
                <hr>
                <a class="dropdown-item" href="{{ url('home') }}">
                    <i class='bx bx-home'></i> {{ __('Principal') }}
                </a>
                <a class="dropdown-item" href="{{ url('challenges') }}">
                    <i class='bx bx-run'></i> {{ __('Desafíos') }}
                </a>

                <a class="dropdown-item" href="{{ url('wallets') }}">
                    <i class='bx bx-wallet' ></i> {{ __('Billetera') }}
                </a>

                @role('admin')
                <a class="dropdown-item" href="{{ url('categories') }}">
                    <i class='bx bx-certification'></i> {{ __('Categoría') }}
                </a>
                <a class="dropdown-item" href="{{ url('jobs') }}">
                    <i class='bx bx-cog'></i> {{ __('Trabajos') }}
                </a>
                <a class="dropdown-item" href="{{ url('payments') }}">
                    <i class='bx bx-certification'></i> {{ __('Pagos') }}
                </a>
                <a class="dropdown-item" href="{{ url('users') }}">
                    <i class='bx bxs-user'></i> {{ __('Usuarios') }}
                </a>
                <a class="dropdown-item" href="{{ route('roles.index') }}">
                    <i class='bx bx-award'></i> {{ __('Roles') }}
                </a>
                <a class="dropdown-item" href="{{ route('permissions.index') }}">
                    <i class='bx bx-key'></i>{{ __('Permisos') }}
                </a>
                @endrole
                @if (Auth::user()->role == 'admin')
                    <a class="dropdown-item" href="{{ url('https://cuenta.culking.com/logactivity') }}">
                        <i class='bx bx-list-ol'></i> {{ __('Bitácora') }}
                    </a>
                @endif

                @php
                    $dev1 = env('APP_ENV')
                @endphp
                @if ($dev1 == 'local')
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class='bx bx-exit'></i> {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a class="dropdown-item" href="{{ url('https://cuenta.culking.com/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class='bx bx-exit'></i> {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ url('https://cuenta.culking.com/logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                @endif
            </ul>

        @endguest
    </nav>

</header>
