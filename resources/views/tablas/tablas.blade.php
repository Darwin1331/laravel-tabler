@extends('layouts.principal')

@section('title', 'Tablas')
@section('page-pretitle', 'Componentes')
@section('page-title', 'Tablas')

@section('content')
<div class="card">
    <div class="card-header"><h3 class="card-title">Tabla de ejemplo</h3></div>
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead><tr><th>#</th><th>Nombre</th><th>Categoría</th><th>Estado</th></tr></thead>
            <tbody>
                <tr><td>1</td><td>Registro de ejemplo A</td><td>General</td><td><span class="badge bg-success-lt">Activo</span></td></tr>
                <tr><td>2</td><td>Registro de ejemplo B</td><td>Administración</td><td><span class="badge bg-warning-lt">Pendiente</span></td></tr>
                <tr><td>3</td><td>Registro de ejemplo C</td><td>General</td><td><span class="badge bg-secondary-lt">Archivado</span></td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
