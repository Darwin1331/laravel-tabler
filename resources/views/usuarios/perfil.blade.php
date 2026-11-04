@extends('layouts.principal')

@section('title', 'Mi perfil')
@section('page-pretitle', 'Cuenta')
@section('page-title', 'Mi perfil')

@section('content')
<div class="row row-cards">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body text-center">
                <span class="avatar avatar-xl mb-3 bg-blue-lt">U</span>
                <h3 class="m-0">Usuario</h3>
                <div class="text-secondary">Administrador</div>
                <div class="mt-3"><span class="status status-green"><span class="status-dot"></span>Cuenta activa</span></div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Información de perfil</h3></div>
            <div class="card-body">
                <p><strong>Nombre:</strong> Usuario de demostración</p>
                <p><strong>Correo:</strong> usuario@example.com</p>
                <p class="text-secondary mb-0">Estos datos son ilustrativos y no corresponden a una cuenta autenticada.</p>
            </div>
        </div>
    </div>
</div>
@endsection
