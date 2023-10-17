@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Almacen</h2>

        <div class="card">
            <div class="card-body">
                <h3>{{ $store->name }}</h3>
                <p class="card-text"><strong>Slug:</strong> {{ $store->slug }}</p>
                <p class="card-text"><strong>Imagen:</strong></p>
                @if ($store->front_page)
                    <img src="{{ $store->front_page }}" alt="" height="150">
                @endif
                <p class="card-text"><strong>NIT:</strong> {{ $store->nit }}</p>
                <p class="card-text"><strong>Ubicacion:</strong>
                    {{$store->location}}

                    <div id="map">
                        @php
                            $strArr = preg_split("/[\,]+/",$store->location);
                            $lat = $strArr[0];
                            $long = $strArr[1];

                            echo "
                            <iframe
                                src='https://maps.google.com/maps?q=".$lat.",".$long."&hl=es;z=14&output=embed'
                                frameborder='0'
                                style='border:0'
                            >
                            </iframe>";
                        @endphp
                    </div>
                </p>
                <p class="card-text"><strong>Estado:</strong> {{ $store->status }}</p>
                <p class="card-text"><strong>Descripcion:</strong> {{ $store->description }}</p>
                <a href="{{ route('stores.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection