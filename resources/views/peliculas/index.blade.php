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
            <tr>
                <th scope="col">Venom:</th>
                <th scope="col"> Ficción</th>
                <th scope="col">N/a</th>
            </tr>
        </tbody>

    </table>
</div>

@endsection
