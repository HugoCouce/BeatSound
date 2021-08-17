<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lo usaremos para mostrar la información de todos los usuarios
        $datos['users'] = User::paginate(5);
        return view('user.index', $datos);
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
        return view('index');
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
        $datosUser = request()->except('_token');
        /* Necesitamos encriptar la contraseña por que laravel las encripta por defecto en el login y
        al hacer la comparación de estas, si no está encriptada, no coinciden */
        $datosUser['password'] = bcrypt($datosUser['password']);

        /* Inserción en la BD */
        User::insert($datosUser);

        /* Al principio devolvíamos un json para visualizar que los datos se enviaban a la BD */
        /* return response()->json($datosUsuario); */
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user_dni)
    {
        //Buscamos el usuario con el dni y si no existe salta una excepción
        $user = User::findOrFail($user_dni);
        //Con compact pasamos varios parámetros a la vez a la vista
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_dni)
    {
        //Ahora además de eliminar la información del token, lo hacemos también con la del method.
        //Solo necesitamos los datos que contenga nuestra tabla
        $datosUser = request()->except('_token', '_method');
        User::where('user_dni', '=', $user_dni)->update($datosUser);

        //Volvemos a la vista de edición
        $user = User::findOrFail($user_dni);
        return view('user.edit', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_dni)
    {
        //
        User::destroy($user_dni);
        return view('index');
    }
}
