@extends('layouts.app')

@section('title')
    Culking | Desafíos
@stop

@section('menu')
    @include('layouts.menu')
@endsection
@section('content')
    <!--div class="navbar py-4">
            <a href="#inicio" class="nav-link">Inicio</a>
            <a href="#representantes" class="nav-link">Representantes</a>
            <a href="#marketing" class="nav-link">Marketing</a>
            <a href="#album" class="nav-link">Album</a>
        </div-->
    <section class="container" id="#inicio">
        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            <div class="gallery-cell"></div>
            <div class="gallery-cell"></div>
            <div class="gallery-cell"></div>
            <div class="gallery-cell"></div>
            <div class="gallery-cell"></div>
        </div>
    </section>
    <br>
    <hr>
    <div class="text-center">
        <a href="/desafios" class="btn btn-lg btn-warning">Ir a desafíos</a>
    </div>
    @if (count($jobs)>0)
        <div class="container">
            <h1>Trabajos disponibles</h1>
            <ol class="text-primary">
                @foreach ($jobs as $job)
                    <li>
                        <a href="{{route('jobs.slug',$job->slug)}}">
                            <strong> {{$job->title}}</strong>
                            <p><span>{{$job->category->title}}</span> <small class="text-secondary">{{$job->created_at}}</small></p>
                        </a>
                    </li>
                @endforeach
            </ol>
        </div>

    @endif

@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <style>
        .gallery {
            background: #EEE;
        }

        .gallery-cell {
            width: 66%;
            height: 200px;
            margin-right: 10px;
            background: #8C8;
            counter-increment: gallery-cell;
        }

        /* cell number */
        .gallery-cell:before {
            display: block;
            text-align: center;
            content: counter(gallery-cell);
            line-height: 200px;
            font-size: 80px;
            color: white;
        }
    </style>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>


@stop
