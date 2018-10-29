<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Porcentaje;

class PorcentajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        /*
        *   Obtener el porcentaje
        */
        $porcentaje = Porcentaje::find($id);

        /*
        *   Verificar si el dato es correcto
        */

        $porcentaje = Porcentaje::findOrFail($id);

        return view('porcentajes.edit', compact('porcentaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   

        /*dd($request);*/
        
        /*
        *   Obtener porcentaje
        */

        $porcentaje = Porcentaje::find($id);
        
        $porcentaje->gestion_credito = $request->gestion_credito;
        $porcentaje->seguro_bancario = $request->seguro_bancario;
        $porcentaje->interes = $request->interes;
        $porcentaje->detalle_cambio = $request->detalle_cambio;

        if($porcentaje->save()){
            
            alert()->success('Se han editado los valores', '')->autoClose(10000)->showCloseButton('aria-label');
            return Redirect('/panel');
        }

        else{
            
            alert()->error('No se lograron editar los valores', '')->autoClose(10000)->showCloseButton('aria-label');
            return redirect('/panel');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }
}
