<aside class="navbar navbar-vertical navbar-expand-lg">
    <div class="container-fluid">

        {{-- Botón móvil --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#sidebar-menu"
                aria-controls="sidebar-menu"
                aria-expanded="false"
                aria-label="Abrir navegación">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Logo --}}
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('dashboard') }}"
               class="text-decoration-none">

                <span class="navbar-brand-image">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="32"
                         height="32"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round">

                        <path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4"></path>
                        <path d="M9 12l2 2l4-4"></path>

                    </svg>
                </span>

                <span class="navbar-brand-text ms-2">
                    Mi Sistema
                </span>

            </a>
        </h1>

        {{-- Menú --}}
        <div class="navbar-collapse" id="sidebar-menu">

            <ul class="navbar-nav pt-lg-3">

                {{-- PRINCIPAL --}}
                <li class="nav-item">

                    <div class="nav-section-title">
                        PRINCIPAL
                    </div>

                </li>

                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">

                    <a class="nav-link"
                       href="{{ route('dashboard') }}">

                        <span class="nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M5 12l-2 0l9-9l9 9l-2 0"></path>
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7"></path>
                                <path d="M9 21v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v6"></path>

                            </svg>
                        </span>

                        <span class="nav-link-title">
                            Dashboard
                        </span>

                    </a>

                </li>


                {{-- GESTIÓN --}}
                <li class="nav-item">

                    <div class="nav-section-title">
                        GESTIÓN
                    </div>

                </li>


                <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">

                    <a class="nav-link"
                       href="{{ route('users.index') }}">

                        <span class="nav-link-icon">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>

                            </svg>

                        </span>

                        <span class="nav-link-title">
                            Usuarios
                        </span>

                    </a>

                </li>

                <li class="nav-item {{ request()->routeIs('productos.*') ? 'active' : '' }}">

                    <a class="nav-link"
                       href="{{ route('productos.index') }}">

                        <span class="nav-link-icon">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>

                            </svg>

                        </span>

                        <span class="nav-link-title">
                            Productos
                        </span>

                    </a>

                </li>


                <li class="nav-item {{ request()->routeIs('charts') ? 'active' : '' }}">

                    <a class="nav-link"
                       href="{{ route('charts') }}">

                        <span class="nav-link-icon">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v7a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v11a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v15a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>

                            </svg>

                        </span>

                        <span class="nav-link-title">
                            Gráficos
                        </span>

                    </a>

                </li>


                <li class="nav-item {{ request()->routeIs('tables') ? 'active' : '' }}">

                    <a class="nav-link"
                       href="{{ route('tables') }}">

                        <span class="nav-link-icon">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M3 10h18"></path>
                                <path d="M3 14h18"></path>
                                <path d="M10 3v18"></path>
                                <path d="M14 3v18"></path>
                                <path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2-2v-14a2 2 0 0 1 2-2"></path>

                            </svg>

                        </span>

                        <span class="nav-link-title">
                            Tablas
                        </span>

                    </a>

                </li>


                <li class="nav-item {{ request()->routeIs('forms') ? 'active' : '' }}">

                    <a class="nav-link"
                       href="{{ route('forms') }}">

                        <span class="nav-link-icon">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2"></path>
                                <path d="M9 15l2 2l4-4"></path>

                            </svg>

                        </span>

                        <span class="nav-link-title">
                            Formularios
                        </span>

                    </a>

                </li>


                {{-- CUENTA --}}
                <li class="nav-item">

                    <div class="nav-section-title">
                        CUENTA
                    </div>

                </li>


                <li class="nav-item {{ request()->routeIs('users.profile') ? 'active' : '' }}">

                    <a class="nav-link"
                       href="{{ route('users.profile') }}">

                        <span class="nav-link-icon">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>

                            </svg>

                        </span>

                        <span class="nav-link-title">
                            Mi perfil
                        </span>

                    </a>

                </li>

            </ul>


            {{-- Footer del sidebar --}}
            <div class="navbar-side mt-auto">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link" href="#">

                            <span class="nav-link-icon">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round">

                                    <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>

                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>

                                </svg>

                            </span>

                            <span class="nav-link-title">
                                Configuración
                            </span>

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </div>
</aside>