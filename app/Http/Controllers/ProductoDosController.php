<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoDosController extends Controller
{
    /**
     * Display a listing of the producto.
     */
    public function index()
    {
        $productos = Producto::all();

        return view('productos.gestionar', compact('productos'));
    }

    /**
     * Show the form for creating a new producto.
     */
    public function create()
    {
        return view('productos.registro');
    }

    /**
     * Store a newly created producto in storage.
     */
    public function store(Request $request)
    {
        $producto = Producto::create([
        'nombre' => $request->nombre,
        'marca' => $request->marca,
        'descripcion' => $request->descripcion,
        'precio' => $request->precio
    ]);

        if (!$producto) {
            echo "ERROR al registrar producto :(";
            return route('productos.create');
        }
        echo "Producto registrado con exito :)";
        return $this->index();
    }

    /**
     * Display the specified producto.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified producto.
     */
    public function edit(string $id)
    {
        $producto = Producto::where('id', $id)->first();
        return view('productos.editar', compact('producto'));
    }

    /**
     * Update the specified producto in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::where('id', $id)->update([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio
        ]);

        if (!$producto) {
        echo "producto no actualizado :(";
        return $this->index();
        }
        echo "producto actualizado con éxito :)";
        return $this->index();
    }

    /**
     * Remove the specified producto from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::where('id', $id)->delete();
        if (!$producto) {
            echo "Error al eliminar el producto X(";
            return $this->index();
        }
        echo "Producto eliminido con éxito X)";
        return $this->index();
    }
}
