@extends('layouts.app')

@section('botones')
<a href={{route('peliculas.index')}} class="btn btn-primary mr-2 text-white">Lista de Peliculas</a>
@endsection

@section('content')
<h2 class="text-center mb-5">Crear Nueva Pelicula</h2>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form method="POST" action={{route('peliculas.store')}} novalidate>
            @csrf
            <div class="form-group">
                <label form="nombre">Nombre Pelicula</label>
                <input type="text" name="nombre" class="form-control @error('nombre')is-invalid @enderror" id="nombre" placeholder="Nombre Pelicula" value="{{old('nombre')}}">
                @error('nombre')
                <span class="invalid-feedback d-block" role="alert"> 
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Agregar Pelicula">
            </div>
        </form>
    </div>
</div>
@endsection
