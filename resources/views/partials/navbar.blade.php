<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">

        {{-- Botón móvil --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar-menu"
                aria-controls="navbar-menu"
                aria-expanded="false"
                aria-label="Abrir navegación">
            <span class="navbar-toggler-icon"></span>
        </button>


        {{-- Acciones de la derecha --}}
        <div class="navbar-nav flex-row order-md-last">

            {{-- Notificaciones --}}
            <div class="nav-item dropdown">

                <a href="#"
                   class="nav-link px-0"
                   data-bs-toggle="dropdown"
                   tabindex="-1"
                   aria-label="Notificaciones">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="24"
                         height="24"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         class="icon">

                        <path d="M10 5a2 2 0 1 1 4 0"></path>
                        <path d="M12 17v.01"></path>
                        <path d="M6 10a6 6 0 0 1 12 0c0 7 3 7 3 9h-18c0-2 3-2 3-9"></path>
                        <path d="M9 21h6"></path>

                    </svg>

                    <span class="badge bg-red"></span>

                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <span class="dropdown-header">
                        Notificaciones
                    </span>

                    <a href="#" class="dropdown-item">
                        No tienes nuevas notificaciones.
                    </a>

                </div>

            </div>


            {{-- Usuario --}}
            <div class="nav-item dropdown">

                <a href="#"
                   class="nav-link d-flex lh-1 text-reset p-0"
                   data-bs-toggle="dropdown"
                   aria-label="Abrir menú de usuario">

                    <span class="avatar avatar-sm">
                        U
                    </span>

                    <div class="d-none d-xl-block ps-2">

                        <div>
                            Usuario
                        </div>

                        <div class="mt-1 small text-secondary">
                            Administrador
                        </div>

                    </div>

                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <a href="{{ route('users.profile') }}"
                       class="dropdown-item">

                        Mi perfil

                    </a>

                    <a href="#"
                       class="dropdown-item">

                        Configuración

                    </a>

                    <div class="dropdown-divider"></div>

                    <a href="#"
                       class="dropdown-item">

                        Cerrar sesión

                    </a>

                </div>

            </div>

        </div>


        {{-- Menú móvil / búsqueda --}}
        <div class="collapse navbar-collapse" id="navbar-menu">

            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">

                <div class="col">

                    <form action="#" method="get">

                        <div class="input-icon">

                            <span class="input-icon-addon">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="icon">

                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                    <path d="M21 21l-6 -6"></path>

                                </svg>

                            </span>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Buscar..."
                                   aria-label="Buscar">

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</header>