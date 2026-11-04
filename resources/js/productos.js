
$(document).ready(function () {

    $('#formProducto').on('submit', function (e) {
        e.preventDefault();

        let formulario = $(this);
        let metodo = $('#metodoFormulario').val() || 'POST';

        // En edición usa la URL que prepara el botón Editar.
        // En registro usa la ruta indicada en data-store-url.
        let url = metodo === 'PUT'
            ? formulario.attr('action')
            : formulario.data('store-url');

        $.ajax({
            url: url,
            type: 'POST',
            data: formulario.serialize(),

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function (respuesta) {
                let producto = respuesta.producto;

                // Escapar texto para insertarlo de forma segura en el HTML.
                let escapar = function (valor) {
                    return $('<div>').text(valor ?? '').html();
                };

                let fila = `
                    <tr data-id="${producto.idProducto}">
                        <td>${producto.idProducto}</td>
                        <td>${escapar(producto.productos)}</td>
                        <td>${Number(producto.precio).toFixed(2)}</td>
                        <td>${escapar(producto.categoria)}</td>
                        <td>${producto.stock}</td>
                        <td class="text-center">
                            <div class="btn-list justify-content-center">
                                <button type="button"
                                    class="btn btn-warning btn-sm btnEditar"
                                    data-id="${producto.idProducto}"
                                    data-productos="${escapar(producto.productos)}"
                                    data-precio="${producto.precio}"
                                    data-categoria="${escapar(producto.categoria)}"
                                    data-stock="${producto.stock}">
                                    Editar
                                </button>

                                <form action="/productos/${producto.idProducto}"
                                    method="POST"
                                    data-swal-delete="${escapar(producto.productos)}">
                                    <input type="hidden" name="_token"
                                        value="${$('meta[name="csrf-token"]').attr('content')}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                `;

                let filaExistente = $(
                    '#cuerpoProductos tr[data-id="' + producto.idProducto + '"]'
                );

                if (metodo === 'PUT' && filaExistente.length) {
                    // Reemplazar la fila que se editó.
                    filaExistente.replaceWith(fila);
                } else {
                    // Quitar el mensaje de tabla vacía, si existe.
                    $('#cuerpoProductos')
                        .find('td[colspan="6"]')
                        .closest('tr')
                        .remove();

                    // Añadir el nuevo producto.
                    $('#cuerpoProductos').append(fila);
                }

                let elementoModal = document.getElementById('modalProducto');
                bootstrap.Modal.getOrCreateInstance(elementoModal).hide();

                formulario[0].reset();
                $('#metodoFormulario').val('POST');
                formulario.attr('action', '');

                Swal.fire({
                    icon: 'success',
                    title: '¡Correcto!',
                    text: respuesta.mensaje,
                    confirmButtonText: 'Aceptar'
                });
            },

            error: function (error) {
                if (error.status === 422 && error.responseJSON?.errors) {
                    let errores = Object.values(error.responseJSON.errors)
                        .flat()
                        .join('\n');

                    Swal.fire({
                        icon: 'error',
                        title: 'Revisa los datos',
                        text: errores
                    });
                    return;
                }

                console.error(error.responseJSON || error);

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se pudo guardar el producto.'
                });
            }
        });
    });

});
