@extends('layouts.app')
@section('titulo', 'Editar producto')
@section('contenido')

<center>
    <h1>Editar producto</h1>

    <a href="{{ route('producto.index') }}">Gestionar productos</a>

    <form action="{{ route('producto.update', ['id' => $producto->id]) }}" method="POST">

        @csrf
        @method('PUT')

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}">

        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca" value="{{ $producto->marca }}">

        <label for="descripcion">Descripción del producto</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}">

        <label for="precio">Precio</label>
        <input type="text" id="precio" name="precio" value="{{ $producto->precio }}">

        <button type="submit">Editar producto</button>
    </form>
</center>

@endsection
