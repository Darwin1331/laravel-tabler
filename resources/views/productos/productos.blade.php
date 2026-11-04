@extends('layouts.principal')

@section('page-title', 'Productos')

@section('content')
<div class="container-xl">

    {{-- Mensajes --}}
    @if (session('success'))
        <div data-swal-success="{{ session('success') }}" hidden></div>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Revisa los siguientes errores:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Encabezado y botón --}}
    <div class="row align-items-center mb-3">
        <div class="col">
            <h2 class="page-title">Lista de productos</h2>
            <div class="text-secondary">
                Administración del inventario
            </div>
        </div>

        <div class="col-auto">
            <button type="button"
                    class="btn btn-primary"
                    id="btnAgregar">
                + Añadir producto
            </button>
        </div>
    </div>

    {{-- Tabla --}}
    <div class="card">
        <div class="table-responsive">
            <table id="tablaProductos" class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>

                <tbody id="cuerpoProductos">
                    @forelse ($productos as $producto)
                        <tr data-id="{{ $producto->idProducto}}">
                            <td>{{ $producto->idProducto }}</td>
                            <td>{{ $producto->productos }}</td>
                            <td>{{ number_format($producto->precio, 2) }}</td>
                            <td>{{ $producto->categoria }}</td>
                            <td>{{ $producto->stock }}</td>

                            <td class="text-center">
                                <div class="btn-list justify-content-center">
                                    <button type="button"
                                            class="btn btn-warning btn-sm btnEditar"
                                            data-id="{{ $producto->idProducto }}"
                                            data-productos="{{ $producto->productos }}"
                                            data-precio="{{ $producto->precio }}"
                                            data-categoria="{{ $producto->categoria }}"
                                            data-stock="{{ $producto->stock }}">
                                        Editar
                                    </button>

                                    
                                    <form action="{{ route('productos.destroy', $producto->idProducto) }}"
                                          method="POST"
                                          data-swal-delete="{{ $producto->productos }}">
                                        @csrf
                                        @method('DELETE')
                                    
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Eliminar
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-secondary py-4">
                                No hay productos registrados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal para añadir y editar --}}
<div class="modal modal-blur fade" id="modalProducto"
     tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <form id="formProducto" data-store-url="{{route('productos.store')}}">
                @csrf

                <input type="hidden" name="_method" id="metodoFormulario" value="POST">

                <div class="modal-header">
                    <h5 class="modal-title" id="tituloModal">
                        Añadir producto
                    </h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Cerrar"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre del producto</label>
                        <input type="text"
                               name="productos"
                               id="campoProductos"
                               class="form-control"
                               maxlength="20"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number"
                               name="precio"
                               id="campoPrecio"
                               class="form-control"
                               min="0"
                               step="0.01"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Categoría</label>
                        <input type="text"
                               name="categoria"
                               id="campoCategoria"
                               class="form-control"
                               maxlength="30"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stock</label>
                        <input type="number"
                               name="stock"
                               id="campoStock"
                               class="form-control"
                               min="0"
                               step="1"
                               required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link"
                            data-bs-dismiss="modal">
                        Cancelar
                    </button>


                    <button type="submit" class="btn btn-primary">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function () {
    const elementoModal = document.getElementById('modalProducto');

    const botonAgregar = document.getElementById('btnAgregar');
    const formulario = document.getElementById('formProducto');
    const metodoFormulario = document.getElementById('metodoFormulario');
    const tituloModal = document.getElementById('tituloModal');

    const campoProductos = document.getElementById('campoProductos');
    const campoPrecio = document.getElementById('campoPrecio');
    const campoCategoria = document.getElementById('campoCategoria');
    const campoStock = document.getElementById('campoStock');

    if (!elementoModal || !formulario) {
        console.error('No se encontró el modal o el formulario.');
        return;
    }

    if (!window.bootstrap || !window.bootstrap.Modal) {
        console.error('Bootstrap Modal no está disponible.');
        return;
    }

    const modal = window.bootstrap.Modal.getOrCreateInstance(elementoModal);

    // CREAR: conserva el funcionamiento del botón Añadir producto.
    if (botonAgregar) {
        botonAgregar.addEventListener('click', function () {
            formulario.action = "{{ route('productos.store') }}";
            metodoFormulario.value = 'POST';
            tituloModal.textContent = 'Añadir producto';

            campoProductos.value = '';
            campoPrecio.value = '';
            campoCategoria.value = '';
            campoStock.value = '';

            modal.show();
        });
    }

    // EDITAR: carga los datos de la fila seleccionada.
    document.addEventListener('click', function (event) {
    const boton = event.target.closest('.btnEditar');

    if (!boton) return;

    const id = boton.dataset.id;

    formulario.action = "{{ url('/productos') }}/" + encodeURIComponent(id);
    metodoFormulario.value = 'PUT';
    tituloModal.textContent = 'Editar producto';

    campoProductos.value = boton.dataset.productos || '';
    campoPrecio.value = boton.dataset.precio || '';
    campoCategoria.value = boton.dataset.categoria || '';
    campoStock.value = boton.dataset.stock || '';

    modal.show();
});
});
</script>
@endsection