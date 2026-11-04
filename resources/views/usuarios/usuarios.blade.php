@extends('layouts.principal')

@section('title', 'Gestión de usuarios')
@section('page-pretitle', 'Administración')
@section('page-title', 'Gestión de usuarios')

@section('page-actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
            <path d="M12 5v14"></path><path d="M5 12h14"></path>
        </svg>
        Nuevo usuario
    </a>
@endsection

@section('content')
<div class="row row-cards">
    <div class="col-sm-6 col-lg-3">
        <div class="card"><div class="card-body">
            <div class="subheader">Total de usuarios</div>
            <div class="h1 mb-0">128</div>
            <div class="text-secondary mt-2">Datos de demostración</div>
        </div></div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card"><div class="card-body">
            <div class="subheader">Activos</div>
            <div class="h1 mb-0 text-success">116</div>
            <div class="text-secondary mt-2">90,6 % del total</div>
        </div></div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card"><div class="card-body">
            <div class="subheader">Pendientes</div>
            <div class="h1 mb-0 text-warning">8</div>
            <div class="text-secondary mt-2">Requieren revisión</div>
        </div></div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card"><div class="card-body">
            <div class="subheader">Inactivos</div>
            <div class="h1 mb-0 text-danger">4</div>
            <div class="text-secondary mt-2">3,1 % del total</div>
        </div></div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h3 class="card-title">Usuarios registrados</h3>
                    <div class="text-secondary">Listado visual de ejemplo; todavía no está conectado a una base de datos.</div>
                </div>
                <div class="ms-auto">
                    <button type="button" class="btn btn-outline-primary" data-swal-demo>
                        Probar SweetAlert2
                    </button>
                </div>
            </div>

            <div class="card-body border-bottom py-3">
                <div class="row g-2 align-items-center">
                    <div class="col-md-6 text-secondary">Mostrando 2 registros de demostración</div>
                    <div class="col-md-6">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                    <circle cx="10" cy="10" r="7"></circle><path d="m21 21-6-6"></path>
                                </svg>
                            </span>
                            <input type="search" class="form-control" placeholder="Buscar usuario..." aria-label="Buscar usuario" data-user-search>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-vcenter card-table" id="users-table">
                    <thead>
                        <tr><th>Usuario</th><th>Rol</th><th>Estado</th><th>Último acceso</th><th class="w-1">Acciones</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center py-1">
                                    <span class="avatar bg-blue-lt me-3">DC</span>
                                    <div><div class="fw-bold">Darwin Choque</div><div class="text-secondary">darwin@example.com</div></div>
                                </div>
                            </td>
                            <td>Administrador</td>
                            <td><span class="status status-green"><span class="status-dot"></span>Activo</span></td>
                            <td>Hoy, 09:24</td>
                            <td><button type="button" class="btn btn-outline-danger btn-sm" data-swal-delete="Darwin Choque">Eliminar</button></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center py-1">
                                    <span class="avatar bg-purple-lt me-3">JP</span>
                                    <div><div class="fw-bold">Juan Pérez</div><div class="text-secondary">juan@example.com</div></div>
                                </div>
                            </td>
                            <td>Editor</td>
                            <td><span class="status status-green"><span class="status-dot"></span>Activo</span></td>
                            <td>Ayer, 18:42</td>
                            <td><button type="button" class="btn btn-outline-danger btn-sm" data-swal-delete="Juan Pérez">Eliminar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-secondary">
                Aviso: esta pantalla usa registros ficticios. El botón Eliminar solo demuestra la confirmación de SweetAlert2; no borra datos.
            </div>
        </div>
    </div>
</div>
@endsection
