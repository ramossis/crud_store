@extends('layouts.app')

@section('title')
    Culking | Inicio
@stop

@section('menu')
    @include('layouts.menu')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="">
                    <div class="card-header">{{ __('Principal') }}</div>

                    <div class="card-body">
                        <a href="https://trabajos.culking.com/desafios">Ir a desafíos</a>
                    </div>
                    @role('admin')
                        <h1>Top usuario</h1>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Usuario</th>
                                        <th>Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($completions as $payment)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $payment->user->username }}</td>
                                            <td>{{ $payment->sum }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {!! $completions->links() !!} --}}
                        </div>
                        <h1>Todos los desafíos</h1>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Dueño</th>
                                        <th>Competidor</th>
                                        <th>Monto</th>
                                        <th>Desafio</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($allcompletions as $completion)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $completion->challenge->user->username }}</td>
                                            <td>{{ $completion->user->username }}</td>
                                            <td>{{ $completion->challenge->price }}</td>
                                            <td>{{ $completion->challenge->title }}</td>
                                            <td>
                                                {{ $completion->payment_status }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {!! $completions->links() !!} --}}
                        </div>

                    @endrole
                    @isset($mycompletions)
                    <h1>Mis desafíos publicados</h1>
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Competidor</th>
                                    <th>Monto</th>
                                    <th>Desafio</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($allcompletions as $completion)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $completion->user->username }}</td>
                                        <td>{{ $completion->challenge->price }}</td>
                                        <td>{{ $completion->challenge->title }}</td>
                                        <td>
                                            {{ $completion->payment_status }}
                                            <br>
                                            {{ $completion->challenge->status }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {!! $completions->links() !!} --}}
                    </div>
                    @endisset
                </div>
            </div>

        </div>
    </div>
@endsection
@section('css')
@stop

@section('js')
@stop
