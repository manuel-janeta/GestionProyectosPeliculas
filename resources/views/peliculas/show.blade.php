@extends('layouts.app')
@section('content')
{{--<p> {{$pelicula}}</p>--}}
<article class="contenido-pelicula">
    <h1 class="text-center mb-4">{{$pelicula->nombre}}</h1>
    <div class="imagen-pelicula">
        <img src="/storage/{{$pelicula->imagen}}" class="w-100">
    </div>
    <div class="pelicula-data">
        <p>
            <span class="font-weight-bold text-primary">Categoría: </span>
            {{$pelicula->CategoriaPelicula->nombre}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Creado por: </span>
            {{$pelicula->autorPelicula->name}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Duración: </span>
            {{$pelicula->duracion}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Fecha: </span>
            {{date('d-d-Y',strtotime($pelicula->created_at))}}
        </p>
    </div>
    <div class="actores">
        <h2 class="my-3 text-primary">Actores:</h2>
        {!!$pelicula->actores!!}
    </div>
    <div class="sinopsis">
        <h2 class="my-3 text-primary">Sinopsis:</h2>
        {!!$pelicula->sinopsis!!}
    </div>
</article>
@endsection
