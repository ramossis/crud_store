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
                    <input type="search" name="search" value="{!!old('search', $search ?? '')!!}" class="form-control" placeholder="Buscar Almacen...">
                    <button class="btn btn-dark btn-sm"> <i class='bx bx-search-alt-2'></i> Buscar</button>
                </div>
            </div>

        </form>
        @include('layouts.alerts')
        <a href="{{ route('stores.create') }}" class="btn btn-primary btn-sm float-right">Crear Nuevo Almacen</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Ubicacion</th>
                    <th>NIT</th>
                    <th>Estado</th>
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
                            <span>{{$store->name}}</span><br>
                            <small class="text-secondary">{{ $store->slug }}</small>
                        </td>
                        <td>
                            @if ($store->front_page)
                                    <img src="{{$store->front_page}}" alt="" height="40">
                                @else
                                    <img src="https://e7.pngegg.com/pngimages/854/638/png-clipart-computer-icons-preview-batch-miscellaneous-angle-thumbnail.png" alt="" height="40">
                                @endif
                        </td>
                        <td>
                            <span>
                                {{$store->description}}
                            </span>
                        </td>
                        <td>
                            <span>
                                {{$store->location}}
                            </span>
                        </td>
                        <td>
                            <span>
                                {{$store->nit}}
                            </span>
                        </td>
                        <td>
                            {{$store->status}}
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
