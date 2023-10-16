@extends('layouts.app')

@section('title')
    Culking|Almacen
@stop
@section('menu')
    @include('layouts.menu')
@endsection
@section('content')
<div class="container">
    <div class="p-4 rounded">
        <form class="row" action="{{route('stores.index')}}" method="GET">
            @csrf
            <div class="col-md-4">
                <h3>Listado de Alamacenes</h3>
            </div>

            <div class="col-md-8">
                <div class="input-group ">
                    <input type="search" name="search" value="{!!old('search', $search ?? '')!!}" class="form-control" placeholder="Buscar noticias...">
                    <button class="btn btn-dark btn-sm"> <i class='bx bx-search-alt-2'></i> Buscar</button>
                </div>
            </div>

        </form>
        @include('layouts.alerts')
        <a href="{{ route('stores.create') }}" class="btn btn-primary btn-sm float-right">Crear Nueva Categoría</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Icono</th>
                    <th>Color</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($stores as $store)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            <span></span><br>
                            <small class="text-secondary">{{ $store->slug }}</small>
                        </td>
                      
                        <td>
                            <a href="{{ route('stores.show', $store->id) }}" class="btn btn-info"><i class='bx bx-show'></i></a>
                            <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-primary"><i class='bx bx-edit-alt' ></i></a>
                            <form action="{{ route('stores.destroy', $store->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-submit" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')"><i class='bx bx-trash' ></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
