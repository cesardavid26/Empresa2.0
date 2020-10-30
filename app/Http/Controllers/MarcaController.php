<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Empresa;
use Illuminate\Http\Request;

class MarcaController extends Controller
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
        $datos['marcas']=Marca::paginate(5);
        return view('Marca.indexMAR', $datos, compact('empresa'));
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
        return view('Marca.createMAR', compact('empresa'));
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
        //$datosMarca=request()->all();
        $datosMarca=request()->except('_token');
        
        Marca::insert($datosMarca);
        

        return redirect('marca')->with('Mensaje', '¡Marca agregada agregada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empresa = Empresa::findOrFail(1);
        $marca= Marca::findOrFail($id);
        return view('Marca.editMAR', compact('marca', 'empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosMarca=request()->except(['_token', '_method']);
        Marca::where('id', '=', $id)->update($datosMarca);

        //$marca= Marca::findOrFail($id);
        //return view('marca.editMAR', compact('marca'));

        return redirect('marca')->with('Mensaje', '¡Marca modificada con éxito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Marca::destroy($id);
        return redirect('marca')->with('Mensaje', '¡Marca eliminada!');

    }
}
