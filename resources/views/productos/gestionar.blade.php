@extends('layouts.app')
@section('tirulo', 'Gestionar productos')
@section('contenido')

<center>
    <h1>Gestionar los productos</h1>
    <a href="{{ route('producto.create') }}">Registrar producto</a>
    <hr>
    <hr>

    <table>
        <thead>
            <th>N°</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            {{-- {{ $productos }} --}}
            @foreach($productos as $j)
                <tr>
                    <td>{{ /* $j->id */ $loop->iteration }}</td>
                    <td>{{ $j->nombre }}</td>
                    <td>{{ $j->marca }}</td>
                    <td>{{ $j->descripcion }}</td>
                    <td>{{ $j->precio }}</td>
                    <td>
                        <a href="{{ route('producto.edit', ['id'=>$j->id]) }}">Editar</a>
                        |
                        <form
                        action="{{ route('producto.destroy', ['id'=>$j->id]) }}" method="POST"
                        onsubmit="return confirm('seguro?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</center>

@endsection
