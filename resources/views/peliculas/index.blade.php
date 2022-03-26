@extends('layouts.app')
@section('botones')
<a href={{route('peliculas.create')}} class="btn btn-primary mr-2 text-white">Crear Peliculas</a>
@endsection

@section('content')
<h2 class="text-center mb-5">Administra tus Peliculas</h2>

<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">Nombre:</th>
                <th scope="col"> Categoría:</th>
                <th scope="col">Acciones:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userPeliculas as $userPelicula)
            <tr>
                <td>{{$userPelicula->nombre}}</td>
                <td> {{$userPelicula->categoriaPelicula->nombre}}</td>
                <td>
                    <a href="{{route('peliculas.show',['pelicula'=>$userPelicula->id])}}" class="btn btn-success d-block mb-1">Ver</a>
                    <a href="{{route('peliculas.edit',['pelicula'=>$userPelicula->id])}}" class="btn btn-dark d-block mb-1">Editar</a>
                     <eliminar-pelicula pelicula-id={{$userPelicula->id}}>
                    </eliminar-pelicula>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
