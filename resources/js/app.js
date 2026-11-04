import * as bootstrap from 'bootstrap/dist/js/bootstrap.esm.min.js';
import '@tabler/core/dist/js/tabler.min.js';
import Swal from 'sweetalert2';
import './productos';

window.bootstrap = bootstrap;
window.Swal = Swal;

// SweetAlert2: confirmaciones y mensajes reutilizables en las vistas Blade.
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-swal-demo]').forEach((button) => {
        button.addEventListener('click', async () => {
            const result = await Swal.fire({
                title: '¡Funciona SweetAlert2!',
                text: 'La alerta está integrada con Laravel, Vite y Tabler.',
                icon: 'success',
                confirmButtonText: 'Entendido',
                confirmButtonColor: '#206bc4',
            });
        });
    });

    document.querySelectorAll('form[data-swal-delete]').forEach((form) => {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
        
            const nombreProducto = form.dataset.swalDelete || 'este producto';
        
            const resultado = await Swal.fire({
                title: '¿Eliminar producto?',
                html: `Estás a punto de eliminar <strong>${nombreProducto}</strong>.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#d63939',
                cancelButtonColor: '#667382',
                reverseButtons: true,
                focusCancel: true,
                customClass: {
                    popup: 'rounded-3',
                    confirmButton: 'btn btn-danger mx-1',
                    cancelButton: 'btn btn-secondary mx-1'
                },
                buttonsStyling: false
            });
        
            if (resultado.isConfirmed) {
                form.submit();
            }
        });
    });


    const searchInput = document.querySelector('[data-user-search]');
    const userRows = document.querySelectorAll('#users-table tbody tr');

    if (searchInput) {
        searchInput.addEventListener('input', () => {
            const query = searchInput.value.trim().toLocaleLowerCase('es');
            userRows.forEach((row) => {
                row.hidden = !row.textContent.toLocaleLowerCase('es').includes(query);
            });
        });
    }

    // Mensajes flash de Laravel: si una ruta envía session('success'), se mostrará como toast.
    const flashMessage = document.querySelector('[data-swal-success]');
    if (flashMessage) {
        Swal.fire({
            toast: false,
            position: 'center',
            icon: 'success',
            title: flashMessage.dataset.swalSuccess,
            showConfirmButton: true,
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#206bc4',
            timer: 3000,
            timerProgressBar: true
        });
    }
});
