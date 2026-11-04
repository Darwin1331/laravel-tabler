@extends('layouts.principal')

@section('title', 'Dashboard')

@section('page-pretitle', 'Overview')

@section('page-title', 'Dashboard')

@section('page-actions')

    <a href="#" class="btn btn-primary">
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
            <path d="M12 5v14"></path>
            <path d="M5 12h14"></path>
        </svg>

        Nuevo
    </a>

@endsection


@section('content')

<div class="row row-deck row-cards">

    {{-- Welcome --}}
    <div class="col-sm-12 col-lg-6">

        <div class="card card-gradient">

            <div class="card-body">

                <div class="row gy-3">

                    <div class="col-12 col-sm-7 d-flex flex-column">

                        <h3 class="h2">
                            Bienvenido de nuevo
                        </h3>

                        <p class="text-secondary">
                            Aquí puedes administrar y consultar
                            la información de tu aplicación.
                        </p>

                        <div class="row g-5 mt-auto">

                            <div class="col-auto">

                                <div class="subheader">
                                    Usuarios
                                </div>

                                <div class="d-flex align-items-baseline">

                                    <div class="h3 me-2">
                                        128
                                    </div>

                                    <span class="text-green">
                                        +7%
                                    </span>

                                </div>

                                <div class="progress progress-sm">

                                    <div class="progress-bar bg-success"
                                         style="width: 75%"
                                         role="progressbar"
                                         aria-valuenow="75"
                                         aria-valuemin="0"
                                         aria-valuemax="100">
                                    </div>

                                </div>

                            </div>


                            <div class="col-auto">

                                <div class="subheader">
                                    Actividad
                                </div>

                                <div class="d-flex align-items-baseline">

                                    <div class="h3 me-2">
                                        78,4%
                                    </div>

                                    <span class="text-red">
                                        -1%
                                    </span>

                                </div>

                                <div class="progress progress-sm">

                                    <div class="progress-bar bg-danger"
                                         style="width: 78%"
                                         role="progressbar"
                                         aria-valuenow="78"
                                         aria-valuemin="0"
                                         aria-valuemax="100">
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-sm-5 d-flex justify-content-center align-items-center">

                        <div class="text-center">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="120"
                                 height="120"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.5"
                                 class="text-primary">

                                <path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4"></path>

                                <path d="M9 12l2 2l4-4"></path>

                            </svg>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Total Users --}}
    <div class="col-sm-6 col-lg-3">

        <div class="card">

            <div class="card-body">

                <div class="subheader">
                    Total de usuarios
                </div>

                <div class="h1 mb-3">
                    128
                </div>

                <div class="d-flex mb-2">

                    <div>
                        <span class="text-green d-inline-flex align-items-center lh-1">
                            8%
                        </span>
                    </div>

                    <div class="ms-auto text-secondary">
                        Desde el último mes
                    </div>

                </div>

                <div class="progress progress-sm">

                    <div class="progress-bar bg-primary"
                         style="width: 72%">
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Active Users --}}
    <div class="col-sm-6 col-lg-3">

        <div class="card">

            <div class="card-body">

                <div class="subheader">
                    Usuarios activos
                </div>

                <div class="h1 mb-3">
                    94
                </div>

                <div class="d-flex mb-2">

                    <div>
                        <span class="text-green">
                            12%
                        </span>
                    </div>

                    <div class="ms-auto text-secondary">
                        Actualmente
                    </div>

                </div>

                <div class="progress progress-sm">

                    <div class="progress-bar bg-success"
                         style="width: 64%">
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Statistics --}}
    <div class="col-sm-6 col-lg-3">

        <div class="card">

            <div class="card-body">

                <div class="subheader">
                    Registros
                </div>

                <div class="h1 mb-3">
                    1,284
                </div>

                <div class="d-flex align-items-center">

                    <span class="text-green">
                        +12%
                    </span>

                    <span class="text-secondary ms-auto">
                        Este mes
                    </span>

                </div>

            </div>

        </div>

    </div>


    {{-- Revenue --}}
    <div class="col-sm-6 col-lg-3">

        <div class="card">

            <div class="card-body">

                <div class="subheader">
                    Actividad
                </div>

                <div class="h1 mb-3">
                    78,4%
                </div>

                <div class="d-flex align-items-center">

                    <span class="text-green">
                        +5,2%
                    </span>

                    <span class="text-secondary ms-auto">
                        Este mes
                    </span>

                </div>

            </div>

        </div>

    </div>


    {{-- New clients --}}
    <div class="col-sm-6 col-lg-3">

        <div class="card">

            <div class="card-body">

                <div class="subheader">
                    Nuevos usuarios
                </div>

                <div class="h1 mb-3">
                    32
                </div>

                <div class="d-flex align-items-center">

                    <span class="text-green">
                        +18%
                    </span>

                    <span class="text-secondary ms-auto">
                        Esta semana
                    </span>

                </div>

            </div>

        </div>

    </div>


    {{-- Activity --}}
    <div class="col-sm-6 col-lg-3">

        <div class="card">

            <div class="card-body">

                <div class="subheader">
                    Sesiones
                </div>

                <div class="h1 mb-3">
                    456
                </div>

                <div class="d-flex align-items-center">

                    <span class="text-red">
                        -3%
                    </span>

                    <span class="text-secondary ms-auto">
                        Últimos 7 días
                    </span>

                </div>

            </div>

        </div>

    </div>


    {{-- Traffic --}}
    <div class="col-lg-8">

        <div class="card">

            <div class="card-body">

                <h3 class="card-title">
                    Resumen de actividad
                </h3>

                <div class="ratio ratio-21x9">

                    <div class="d-flex align-items-center justify-content-center text-secondary">

                        <div class="text-center">

                            <div class="display-6 mb-2">
                                Gráfico
                            </div>

                            <div>
                                Aquí incorporaremos ApexCharts.
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Activity table --}}
    <div class="col-lg-4">

        <div class="card">

            <div class="card-header">

                <h3 class="card-title">
                    Actividad reciente
                </h3>

            </div>

            <div class="list-group list-group-flush">

                <div class="list-group-item">

                    <div class="row align-items-center">

                        <div class="col-auto">
                            <span class="avatar">JD</span>
                        </div>

                        <div class="col text-truncate">

                            <div class="text-reset d-block">
                                Juan Díaz
                            </div>

                            <div class="d-block text-secondary text-truncate mt-n1">
                                Nuevo usuario registrado
                            </div>

                        </div>

                    </div>

                </div>


                <div class="list-group-item">

                    <div class="row align-items-center">

                        <div class="col-auto">
                            <span class="avatar">AM</span>
                        </div>

                        <div class="col text-truncate">

                            <div class="text-reset d-block">
                                Ana Morales
                            </div>

                            <div class="d-block text-secondary text-truncate mt-n1">
                                Actualizó su perfil
                            </div>

                        </div>

                    </div>

                </div>


                <div class="list-group-item">

                    <div class="row align-items-center">

                        <div class="col-auto">
                            <span class="avatar">CP</span>
                        </div>

                        <div class="col text-truncate">

                            <div class="text-reset d-block">
                                Carlos Pérez
                            </div>

                            <div class="d-block text-secondary text-truncate mt-n1">
                                Inició sesión
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection