@extends('layouts.app')

<!--Estilos-->
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
@endsection

@section('botones')
<a href={{route('peliculas.index')}} class="btn btn-primary mr-2 text-white">Lista de Peliculas</a>
@endsection

@section('content')
<h2 class="text-center mb-5">Crear Nueva Pelicula</h2>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form method="POST" action={{route('peliculas.store')}} enctype="multipart/form-data" novalidate>
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
                <label form="categoria">Categoria</label>
                <select name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria">
                    <option value=''>--Seleccione--</option>
                    @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}" {{old('categoria')==$categoria->id?'selected':''}}>{{$categoria->nombre}}</option>
                    @endforeach
                </select>
                @error('categoria')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label form="actores">Actores</label>
                <input name="actores" type='hidden' id="actores" value="{{old('actores')}}">
                <trix-editor class="form-control @error('actores') is-invalid @enderror" input="actores"> </trix-editor>
                @error('actores')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label form="sinopsis">Sinopsis</label>
                <input name="sinopsis" type='hidden' id="sinopsis" value="{{old('sinopsis')}}">
                <trix-editor class="form-control @error('sinopsis') is-invalid @enderror" input="sinopsis"> </trix-editor>
                @error('sinopsis')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="imagen">Imagen</label>
                <input id="imagen" type='file' class="form-control @error('imagen') is-invalid @enderror" name="imagen">
                @error('imagen')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label form="duracion">Duración</label>
                <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" id="duracion" placeholder="duracion Receta" value="{{old('duracion')}}">
                @error('duracion')
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

<!--Estilos-->
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
