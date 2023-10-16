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
                <h3>Listado de categorías</h3>
            </div>

            <div class="col-md-8">
                <div class="input-group ">
                    <input type="search" name="search" value="{!!old('search', $search ?? '')!!}" class="form-control" placeholder="Buscar noticias...">
                    <button class="btn btn-dark btn-sm"> <i class='bx bx-search-alt-2'></i> Buscar</button>
                </div>
            </div>

        </form>
        @include('layouts.alerts')
        <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm float-right">Crear Nueva Categoría</a>
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
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            <span>{{ $category->title }}</span><br>
                            <small class="text-secondary">{{ $category->slug }}</small>
                        </td>
                        <td>
                            @if ($category->icon)
                                <img src="{{$category->icon}}" alt="" height="40">
                            @else
                                <img src="https://e7.pngegg.com/pngimages/854/638/png-clipart-computer-icons-preview-batch-miscellaneous-angle-thumbnail.png" alt="" height="40">
                            @endif
                        </td>
                        <td>
                            <span style="color:{{$category->color}}">{{ $category->color }}</span> </td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info"><i class='bx bx-show'></i></a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary"><i class='bx bx-edit-alt' ></i></a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-submit" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')"><i class='bx bx-trash' ></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $categories->links() !!}
        </div>

    </div>
</div>

@endsection
