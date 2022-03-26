<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class PeliculaController extends Controller
{
    //costructor
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']); //verifica que se haya relizado la autentificación
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Capturar el id del usuario autentificado
        $userPeliculas = Auth::user()->userPeliculas;
        return view('peliculas.index')->with('userPeliculas', $userPeliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //consulta categorias 
        //$categorias = DB::table('categorias')->get()->pluck('nombre', 'id');


        $categorias = Categoria::all(['id', 'nombre']);
        return view('peliculas.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //validaciones
        $data = $request->validate([
            'nombre' => 'required|min:6',
            'categoria' => 'required',
            'actores' => 'required',
            'sinopsis' => 'required|min:50',
            'imagen' => 'required|image',
            'duracion' => 'required'
        ]);

        //variable para la ruta de la imagen
        $ruta_imagen = $request['imagen']->store('upload-peliculas', 'public');

        //Redimensionar la imagen
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000, 550);
        //Guardar en el disco duro del sevidor
        $img->save();
        //almacenar en la BDD
        /*DB::table('peliculas')->insert([
            'nombre' => $data['nombre'],
            'actores' => $data['actores'],
            'sinopsis' => $data['sinopsis'],
            'imagen' => $ruta_imagen,
            'duracion' => $data['duracion'],
            'user_id' => Auth::user()->id, //capturar el id de usuario
            'categoria_id' => $data['categoria']
        ]);*/

        //Almacenar en la BDD (con modelo)
        Auth::user()->userPeliculas()->create([
            'nombre' => $data['nombre'],
            'actores' => $data['actores'],
            'sinopsis' => $data['sinopsis'],
            'imagen' => $ruta_imagen,
            'duracion' => $data['duracion'],
            'categoria_id' => $data['categoria']
        ]);
        //redireccion
        return Redirect()->action([PeliculaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        return view('peliculas.show')->with('pelicula', $pelicula);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        $categorias = Categoria::all(['id', 'nombre']);
        return view('peliculas.edit')->with('categorias', $categorias)
            ->with('pelicula', $pelicula);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //verificar policy
        $this->authorize('update', $pelicula);

        $data = $request->validate([
            'nombre' => 'required|min:6',
            'categoria' => 'required',
            'actores' => 'required',
            'sinopsis' => 'required|min:50',
            'duracion' => 'required'
        ]);
        //asignando valores
        $pelicula->nombre = $data['nombre'];
        $pelicula->categoria_id = $data['categoria'];
        $pelicula->actores = $data['actores'];
        $pelicula->sinopsis = $data['sinopsis'];
        $pelicula->duracion = $data['duracion'];


        if (request('imagen')) {
            //variable para la ruta de la imagen
            $ruta_imagen = $request['imagen']->store('upload-peliculas', 'public');

            //Redimensionar la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000, 550);
            //Guardar en el disco duro del sevidor
            $img->save();
            $pelicula->imagen = $ruta_imagen;
        }
        $pelicula->save();
        return Redirect()->action([PeliculaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $this->authorize('delete', $pelicula);
        $pelicula->delete();
        return Redirect()->action([PeliculaController::class, 'index']);
    }
}
