@extends('layouts.app')

@section('title')
    Culking | Crear Almacen
@stop

@section('menu')
    @include('layouts.menu')
@endsection
@section('content')
<div class="container">
    <div class="d-flex">
        <a href="{{route('stores.index')}}" class="me-3"><i class='bx bxs-left-arrow-circle'></i> Atrás</a>
        <h2>Crear Nueva Categoría</h2>
    </div>


    @include('layouts.alerts')

    <form method="POST" action="{{ route('stores.store') }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @include('store.fields')
        <button type="submit" class="btn btn-primary btn-submit">Crear Almacen</button>
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
<script>
    //location script
        const $button = document.getElementById('_button');
        const $locationInput = document.getElementById("location");

        $button.addEventListener('click', function() {
            getlocation();
        });

        function getlocation() {
            // Callbacks
            const successCallback = (position) => {
                // Set inputs values
                $locationInput.value = position.coords.latitude+','+position.coords.longitude;
            };
            // Manage error messages
            const errorCallback = (error) => {
                alert(error.code + ' : ' + error.message);
            };
            // Call
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        }
</script>
@stop