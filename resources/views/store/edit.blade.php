@extends('layouts.app')

@section('title')
    Culking | Editar Almacen
@stop

@section('menu')
    @include('layouts.menu')
@endsection
@section('content')
<div class="container">
    <div class="d-flex">
        <a href="{{route('stores.index')}}" class="me-3"><i class='bx bxs-left-arrow-circle'></i> Atrás</a>
        <h2>Editar Almacen</h2>
    </div>
    @include('layouts.alerts')

    <form method="POST" action="{{ route('stores.update', $store->id) }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('store.fields')
        <button type="submit" class="btn btn-primary btn-submit">Guardar Cambios</button>
    </form>
</div>
@endsection
@section('css')

@stop

@section('js')
<script type="text/javascript">
    function previewImage(event, querySelector) {
        //Recuperamos el input que desencadeno la acción
        const input = event.target;
        //Recuperamos la etiqueta img donde cargaremos la imagen
        $imgPreview = document.querySelector(querySelector);
        // Verificamos si existe una imagen seleccionada
        if (!input.files.length) return
        //Recuperamos el archivo subido
        file = input.files[0];
        //Creamos la url
        objectURL = URL.createObjectURL(file);
        //Modificamos el atributo src de la etiqueta img
        $imgPreview.src = objectURL;
    }
</script>
@stop