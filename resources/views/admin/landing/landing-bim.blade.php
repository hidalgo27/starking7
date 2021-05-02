@extends('adminlte::page')

@section('title', 'Landing BIM')

@section('content_header')
    <h1>LISTA LANDING BIM</h1>
@stop

@section('content')
{{--    <p>Welcome to this beautiful admin panel.</p>--}}
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Departamento</th>
            <th scope="col">Provincia</th>
            <th scope="col">Distrito</th>
        </tr>
        </thead>
        <tbody>
        @php $i = 1; @endphp
        @foreach($landing as $landing_list)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$landing_list->nombre}}</td>
            <td>{{$landing_list->email}}</td>
            <td>{{$landing_list->telefono}}</td>
            @foreach($departamento->where('id', $landing_list->departamento) as $dep)
                <td>{{$dep->departamento}}</td>
            @endforeach
            @foreach($provincia->where('id', $landing_list->provincia) as $dep)
                <td>{{$dep->provincia}}</td>
            @endforeach
            @foreach($distrito->where('id', $landing_list->distrito) as $dep)
                <td>{{$dep->distrito}}</td>
            @endforeach
        </tr>
        @php $i++; @endphp
        @endforeach
        </tbody>
    </table>

@stop

@section('css')
{{--    /*<link rel="stylesheet" href="/css/admin_custom.css">*/--}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
