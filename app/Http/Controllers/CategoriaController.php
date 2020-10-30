<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Empresa;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
        $datos['categorias']=Categoria::paginate(5);
        return view('Categoria.indexCAT', $datos, compact('empresa'));
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
        return view('Categoria.createCAT', compact('empresa'));
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
        $datosCategoria=request()->except('_token');
        
        Categoria::insert($datosCategoria);
        

        return redirect('categoria')->with('Mensaje', '¡Categoria agregada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empresa = Empresa::findOrFail(1);
        $categoria= Categoria::findOrFail($id);
        return view('Categoria.editCAT', compact('categoria', 'empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCategoria=request()->except(['_token', '_method']);
        Categoria::where('id', '=', $id)->update($datosCategoria);

        //$categoria= Categoria::findOrFail($id);
        //return view('categoria.editCAT', compact('categoria'));
        return redirect('categoria')->with('Mensaje', '¡Categoria modificada con éxito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Categoria::destroy($id);
        return redirect('categoria')->with('Mensaje', '¡Categoria eliminada!');

    }
}
