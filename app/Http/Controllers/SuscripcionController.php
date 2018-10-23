<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscripcion;
use Redirect;

class SuscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        *  Retornar valores
        */
        $data = Suscripcion::all();

        /*dd($data);*/

        return view('suscripciones.index', compact('data'));
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
        $subscription = new Suscripcion();

        $subscription->suscMail = $request->suscMail;
        $subscription->save();

        return back()->with('success_suscripcion', 5);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suscripcion = Suscripcion::find($id);

        $suscripcion->delete();

        alert()->success('Suscripcion eliminada correctamente', '')->autoClose(10000)->showCloseButton('aria-label');
        
        return Redirect::back();
    }
}
