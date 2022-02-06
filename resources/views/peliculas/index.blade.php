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
                <th scope="col">Diector</th>
            </tr>
        </thead>
        <tbody>
         @foreach($userPeliculas as $userPelicula)
            <tr>
                <td>{{$userPelicula->nombre}}</td>
                <td> {{$userPelicula->categoria_id}}</td>
                <td>
                    <a href="" class="btn btn-success">Ver</a>
                    <a href="" class="btn btn-dark">Editar</a>
                    <a href="" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
