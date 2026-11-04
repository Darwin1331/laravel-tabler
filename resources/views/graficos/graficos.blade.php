@extends('layouts.principal')

@section('title', 'Gráficos')
@section('page-pretitle', 'Analítica')
@section('page-title', 'Gráficos')

@section('content')
<div class="row row-cards">
    <div class="col-md-6">
        <div class="card"><div class="card-header"><h3 class="card-title">Actividad mensual</h3></div>
            <div class="card-body">
                <div class="d-flex align-items-end justify-content-around" style="height: 220px">
                    @foreach ([45, 72, 58, 90, 66, 82] as $height)
                        <div class="bg-primary rounded-top" style="width: 10%; height: {{ $height }}%" title="{{ $height }}%"></div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-around text-secondary mt-3"><span>May</span><span>Jun</span><span>Jul</span><span>Ago</span><span>Sep</span><span>Oct</span></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card"><div class="card-header"><h3 class="card-title">Resumen</h3></div>
            <div class="card-body">
                <div class="h1 mb-1">78,4 %</div><div class="text-secondary mb-3">Actividad de demostración</div>
                <div class="progress progress-lg"><div class="progress-bar bg-success" style="width:78.4%"></div></div>
                <div class="alert alert-info mt-4 mb-0">Datos estáticos de ejemplo; todavía no proceden de una base de datos.</div>
            </div>
        </div>
    </div>
</div>
@endsection
