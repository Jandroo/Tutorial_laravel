@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <div class="row">

    <div class="col-sm-4">

         <img src="{{$pelicula['poster']}}" style="height:400px"/>

    </div>
    <div class="col-sm-8">

        <h1 style="min-height:45px;margin:5px 0 10px 0">{{$pelicula['title']}}</h1>
        <p>Año: {{$pelicula['year']}}</p>
        <p>Director: {{$pelicula['director']}}</p>
        <p><b>Resumen:</b> {{$pelicula['synopsis']}}</p>

        @if($pelicula['rented'] == True)
        <p><b>Estado:</b> Película actualmente alquilada</p>
        <button class="btn btn-danger" type="button">Devolver película</button>

        @elseif($pelicula['rented'] == False)
        <p><b>Estado:</b> Película disponible</p>
        <button class="btn btn-primary" type="button">Alquilar película</button>

        @endif

        <a class="btn btn-warning" href="{{url('catalog/edit/'.$id)}}"><span class="glyphicon glyphicon-pencil"></span>Editar película</a>
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-chevron-left"></span>Volver al listado</button>

    </div>
</div>
@stop