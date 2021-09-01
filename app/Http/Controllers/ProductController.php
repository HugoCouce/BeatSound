<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/* Debemos añadir esta clase para poder borrar las imágenes dentro del directorio de nuestro proyecto */
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lo usaremos para mostrar la información de todos los usuarios
        $datos['products'] = Product::paginate(5);
        return view('product.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validación */
        $campos = [
            'nombre_artista' => 'required|string|max:50',
            'nombre_album' => 'required|string|max:50',
            'precio_unitario' => 'required|int|min:1|max:999',
            'categoria' => 'required',
            'miniatura' => 'required|max:10000|mimes:jpeg, jpg, png',
            'año' => 'required|int|digits:4',
            'formato' => 'required'
        ];

        /* Mensajes de error */
        $mensaje = [
            'required' => 'El campo :attribute es obligatorio',
            'size' => 'El campo :attribute debe tener :size caracteres',
            'max' => 'El campo :attribute no puede tener un precio de menos de :min €',
            'max' => 'El campo :attribute no puede tener un precio de más de :max €',
            'digits' => 'El campo :attribute debe tener :digits digitos',
            'mimes' => 'El campo :attribute debe estar en formato jpeg. jpg o png'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosProducto = request()->except('_token');

        if (request()->hasFile('miniatura')) {
            $datosProducto['miniatura'] = $request->file('miniatura')->store('uploads', 'public');
        }

        Product::insert($datosProducto);
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function buy()
    {
        $datos['products'] = Product::paginate(6);
        return view('product.buy', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function vinyl()
    {
        $vinyl['products'] = Product::query()
            ->where('formato', '=', 'Vinilo')
            ->paginate(6);
        return view('product.buy', $vinyl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function cd()
    {
        $cd['products'] = Product::query()
            ->where('formato', '=', 'CD')
            ->paginate(6);
        return view('product.buy', $cd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProducto = request()->except('_token', '_method');
        /* Si queremos modificar la miniatura, necesitamos borrar la imagen anterior para no acumular imágenes sin uso */
        if (request()->hasFile('miniatura')) {
            $product = Product::findOrFail($id);
            Storage::delete('public/' . $product->miniatura);

            $datosProducto['miniatura'] = $request->file('miniatura')->store('uploads', 'public');
        }

        /* Una vez borrada la miniatura (si hay una nueva) actualizamos la entrada */
        Product::where('producto_id', '=', $id)->update($datosProducto);
        $product = Product::findOrFail($id);
        return redirect()->back()->with('mensaje', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($producto_id)
    {
        Product::destroy($producto_id);

        return redirect('product');
    }
}
