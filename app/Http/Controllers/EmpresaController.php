<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
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
        $datos['empresas']=Empresa::paginate(1);
        return view('empresa.indexEMP', $datos, compact('empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
   /**
    * public function replace($id)
    *{
     * $empresas = Empresa::findOrFail($id);
      *var_dupm($empresas);
       * return view('welcome', compact('empresas'));
    *}
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empresa= Empresa::findOrFail($id);
        return view('empresa.editEMP', compact('empresa'));
    }

    public function replace(){
        $empresa = Empresa::findOrFail(1);
        return view('app', compact('empresa'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpresa=request()->except(['_token', '_method']);
        Empresa::where('id', '=', $id)->update($datosEmpresa);

        
        return redirect('empresa')->with('Mensaje', '¡Empresa modificada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
