<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar la lista de productos
    public function index()
    {
        $productos = Producto::all();

        return view('productos.productos', compact('productos'));
    }

    // Registrar un producto
    public function store(Request $request)
{
    $datos = $request->validate([
        'productos' => 'required|string|max:20',
        'precio' => 'required|numeric|min:0',
        'categoria' => 'required|string|max:30',
        'stock' => 'required|integer|min:0',
    ]);

    $producto = Producto::create($datos);

    return response()->json([
        'mensaje' => 'Producto registrado correctamente.',
        'producto' => $producto
    ], 201);
}

    // Actualizar un producto
    
public function update(Request $request, $id)
{
    $producto = Producto::findOrFail($id);

    $datos = $request->validate([
        'productos' => 'required|string|max:20',
        'precio' => 'required|numeric|min:0',
        'categoria' => 'required|string|max:30',
        'stock' => 'required|integer|min:0',
    ]);

    $producto->update($datos);

    return response()->json([
        'mensaje' => '¡Producto actualizado correctamente!',
        'producto' => $producto
    ]);
}


    // Eliminar un producto
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        $producto->delete();

        return redirect()
            ->route('productos.index')
            ->with('success', '¡Producto eliminado correctamente!');
    }
}
