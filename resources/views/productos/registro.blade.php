@extends('layouts.app')
@section('titulo', 'Registrar producto')
@section('contenido')

<center>
    <h1>Registro de producto</h1>

    <a href="{{ route('producto.index') }}">Gestionar productos</a>

    <form action="{{ route('producto.store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca">

        <label for="descripcion">Descripción del producto</label>
        <input type="text" id="descripcion" name="descripcion">

        <label for="precio">Precio</label>
        <input type="text" id="precio" name="precio">

        <button type="submit">Registrar producto</button>
    </form>
</center>

@endsection
