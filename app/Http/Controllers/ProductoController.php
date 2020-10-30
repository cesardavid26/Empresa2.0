<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Empresa;
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
        $empresa = Empresa::findOrFail(1);
        $datos = Producto::select('p.id', 'p.foto','p.nombre', 'p.referencia', 'p.descripcioncorta', 'p.valor', 'p.categoria_id','p.estado','m.nombre as nombre_marca', 'c.nombre as nombre_categoria')
        ->from('productos as p')
        ->join('marcas as m', 
        function($join){
            $join->on('m.id', '=', 'p.marca_id');
           
        })
        ->join('categorias as c', 
        function($join){
            $join->on('c.id', '=', 'p.categoria_id');
           
        })->paginate(5);
        
        return view('Producto.indexPRO', compact('datos', 'empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empresa = Empresa::findOrFail(1);
        $marcas=Marca::all();
        $categorias=Categoria::all();
        return view('Producto.createPRO', compact('marcas', 'empresa'), compact('categorias'));

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
        return redirect('producto')->with('Mensaje', '¡Producto agregado con éxito!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $empresa = Empresa::findOrFail(1);
        $listados = Producto::select('p.id', 'p.nombre', 'p.descripcioncorta', 'p.palabrasclave', 'p.detalle', 'p.foto', 'p.valor', 'c.nombre as categoria', 'c.descripcion', 'm.nombre as marca')
        ->from('productos as p')
        ->join('categorias as c', function($join){
            $join->on('p.categoria_id', '=', 'c.id')
            ->where('p.estado', '=', 'Disponible')
            ->where('c.estado', '=', 'Activada');
        })->join('marcas as m', function($join){
            $join->on('p.marca_id', '=', 'm.id');
        })
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();
        

        return view('welcome', compact('listados', 'empresa'));
    }

    public function show(Request $request){

        $empresa = Empresa::findOrFail(1);
        $listados = Producto::select('p.id', 'p.estado', 'p.nombre', 'p.foto', 'p.descripcioncorta', 'p.detalle', 'p.valor', 'p.palabrasclave', 'c.nombre as categoria', 'm.nombre as marca')
            ->from('productos as p')
            ->join('categorias as c', function ($join) {
                $join->on('p.categoria_id', '=', 'c.id')
                    ->where('c.estado', '=', 'Activada');
            })
            ->join('marcas as m', function ($join) {
                $join->on('p.marca_id', '=', 'm.id');
            })
            ->paginate(10);

        $categorias = Categoria::select('id', 'nombre')
            ->where('estado', '=', 'Activada')
            ->get();

            if($request){
                $query = trim($request->get('search'));
                 $listados = Producto::where('nombre', 'LIKE', '%'.$query.'%')
                 ->orderBy('id', 'asc')
                 ->get();
            }
        return view('Producto.listPRO', compact('listados', 'categorias','empresa'), ['search' => $query]);

        
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
        $empresa = Empresa::findOrFail(1);
        $marcas=Marca::get();
        $categorias=Categoria::get();
        $producto= Producto::findOrFail($id);
        return view('Producto.editPRO', compact(['producto', 'marcas', 'categorias', 'empresa']));
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
        //$producto= Producto::findOrFail($id);
        //return view('producto', compact(['producto', 'marcas', 'categorias']));

       return redirect('producto')->with('Mensaje', '¡Producto modificado con éxito!');


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
        
        return redirect('producto')->with('Mensaje', '¡Producto eliminado!');
    }
}
