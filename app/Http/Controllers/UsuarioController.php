<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lo usaremos para mostrar la información de todos los usuarios
        $datos['usuarios'] = Usuario::paginate(5);
        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Desde el archivo web.php vamos a enrutar casi todos los métodos con una vista. Así el método create nos llevará a la url
        /usuario/create*/
        return view('usuario.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Este método almacenará los datos recibidos por el formulario.
        La variable recogerá todos los datos del request (menos el token de seguridad) y lo devolverá en un archivo .json.
        Si los necesitáramos todos solo habría que hacer ->all() */
        $datosUsuario = request()->except('_token');

        /* Inserción en la BD */
        Usuario::insert($datosUsuario);

        return response()->json($datosUsuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($usuario_dni)
    {
        //Buscamos el usuario con el dni y si no existe salta una excepción
        $usuario = Usuario::findOrFail($usuario_dni);
        //Con compact pasamos varios parámetros a la vez a la vista
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $usuario_dni)
    {
        //Ahora además de eliminar la información del token, lo hacemos también con la del method.
        //Solo necesitamos los datos que contenga nuestra tabla
        $datosUsuario = request()->except('_token', '_method');
        Usuario::where('usuario_dni', '=', $usuario_dni)->update($datosUsuario);

        //Volvemos a la vista de edición
        $usuario = Usuario::findOrFail($usuario_dni);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuario_dni)
    {
        //
        Usuario::destroy($usuario_dni);
        return redirect('usuario');
    }
}
