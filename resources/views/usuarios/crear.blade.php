@extends('layouts.principal')

@section('title', 'Nuevo usuario')
@section('page-pretitle', 'Administración')
@section('page-title', 'Nuevo usuario')

@section('content')
<div class="row row-cards">
    <div class="col-lg-8">
        <form class="card" onsubmit="return false;">
            <div class="card-header"><h3 class="card-title">Datos del usuario</h3></div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" placeholder="Ej. Juan Pérez" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" placeholder="usuario@ejemplo.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Rol</label>
                    <select class="form-select"><option>Administrador</option><option>Editor</option><option>Usuario</option></select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Estado</label>
                    <select class="form-select"><option>Activo</option><option>Inactivo</option><option>Pendiente</option></select>
                </div>
                <div class="alert alert-info mb-0">
                    Este formulario es una maqueta visual. Aún no guarda usuarios en la base de datos.
                </div>
            </div>
            <div class="card-footer d-flex">
                <a href="{{ route('users.index') }}" class="btn btn-link">Volver</a>
                <button type="button" class="btn btn-primary ms-auto" data-swal-demo>Probar alerta de guardado</button>
            </div>
        </form>
    </div>
</div>
@endsection
