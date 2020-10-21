<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = Producto::select('p.id', 'p.foto','p.nombre', 'p.referencia', 'p.descripcioncorta', 'p.valor', 'p.categoria_id','p.estado','m.nombre as nombre_marca')
        ->from('productos as p')
        ->join('marcas as m', function($join){
            $join->on('m.id', '=', 'p.marca_id');})->paginate(5);
        
        return view('producto.indexPRO', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas=Marca::all();
        $categorias=Categoria::all();
        return view('producto.createPRO', compact('marcas'), compact('categorias'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosProducto=request()->except('_token');

        if($request->hasFile('foto')){
            $datosProducto['foto']=$request->file('foto')->store('uploads','public');

        }
        
        Producto::insert($datosProducto);
        

        //return response()->json($datosProducto);
        return redirect('producto');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $marcas=Marca::get();
        $categorias=Categoria::get();
        $producto= Producto::findOrFail($id);
        return view('producto.editPRO', compact(['producto', 'marcas', 'categorias']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto=request()->except(['_token', '_method']);

        if($request->hasFile('foto')){
            $producto= Producto::findOrFail($id);
            \Storage::delete('public/'.$producto->foto);
            $datosProducto['foto']=$request->file('foto')->store('uploads','public');

        }


        Producto::where('id', '=', $id)->update($datosProducto);

        $marcas=Marca::get();
        $categorias=Categoria::get();
        $producto= Producto::findOrFail($id);
        return view('producto.editPRO', compact(['producto', 'marcas', 'categorias']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto= Producto::findOrFail($id);
        if(\Storage::delete('public/'.$producto->foto)){
            Producto::destroy($id);
        }
        
        return redirect('producto');
    }
}
