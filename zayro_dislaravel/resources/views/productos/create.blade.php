@extends('layouts.app')

@section('head')
    <title>Crear Producto - Zayro Disfraces</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard/inventory.css') }}">
@endsection

@section('page-title', 'Crear Producto')


@section('cards')
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
@endsection

@section('content')
    <div class="card-header">
        <h3 class="heading">Crear Producto</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('productos.store') }}">
            @csrf
            <div>
                <label for="ID_PRODUCTO">ID:</label>
                <input type="text" name="ID_PRODUCTO" id="ID_PRODUCTO">
            </div>
            <div>
                <label for="NOMBRE_DISFRAZ">Nombre:</label>
                <input type="text" name="NOMBRE_DISFRAZ" id="NOMBRE_DISFRAZ">
            </div>
            <div>
                <label for="DESCRIPCION">Descripción:</label>
                <input type="text" name="DESCRIPCION" id="DESCRIPCION"></input>
            </div>
            <div>
                <label for="CANTIDAD">Cantidad:</label>
                <input type="number" name="CANTIDAD" id="CANTIDAD"></input>
            </div>
            <div>
                <label for="PRECIO_UNITARIO">Precio Unitario:</label>
                <input type="number" name="PRECIO_UNITARIO" id="PRECIO_UNITARIO"></input>
            </div>
            <div>
                <label for="ID_CATEGORIA">Categoría:</label>
                <select name="ID_CATEGORIA" id="ID_CATEGORIA">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->ID_CATEGORIA }}">{{ $categoria->CATEGORIA }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="ID_TALLA">Talla:</label>
                <select name="ID_TALLA" id="ID_TALLA">
                    @foreach ($tallas as $talla)
                        <option value="{{ $talla->ID_TALLA }}">{{ $talla->NUMERO_TALLA }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Crear</button>
        </form>
    </div>
@endsection
