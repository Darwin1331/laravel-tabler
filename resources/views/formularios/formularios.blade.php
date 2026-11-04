@extends('layouts.principal')

@section('title', 'Formularios')
@section('page-pretitle', 'Componentes')
@section('page-title', 'Formularios')

@section('content')
<div class="row row-cards">
    <div class="col-lg-8">
        <form class="card" onsubmit="return false;">
            <div class="card-header"><h3 class="card-title">Formulario de ejemplo</h3></div>
            <div class="card-body">
                <div class="mb-3"><label class="form-label">Nombre</label><input class="form-control" placeholder="Escribe tu nombre"></div>
                <div class="mb-3"><label class="form-label">Correo</label><input type="email" class="form-control" placeholder="nombre@ejemplo.com"></div>
                <div class="mb-3"><label class="form-label">Descripción</label><textarea class="form-control" rows="3" placeholder="Escribe una descripción"></textarea></div>
                <div class="mb-3"><label class="form-label">Categoría</label><select class="form-select"><option>Selecciona una opción</option><option>General</option><option>Administración</option></select></div>
                <div class="alert alert-info mb-0">Formulario visual de práctica: no envía ni almacena datos.</div>
            </div>
            <div class="card-footer text-end"><button type="button" class="btn btn-primary" data-swal-demo>Probar envío</button></div>
        </form>
    </div>
</div>
@endsection
