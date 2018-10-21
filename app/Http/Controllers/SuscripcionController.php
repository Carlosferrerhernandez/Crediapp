<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscripciones;

class SuscripcionController extends Controller
{
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'suscMail'=> 'email|required|string|max:255'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        /*
        *  Retornar valores
        */
        $data = Suscripciones::all();

        /*dd($data);*/

        return view('suscripciones.index', compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        /*dd($request);*/

    	// Register contact

        $subscription = new Suscripciones();

        $subscription->suscMail = $request->suscMail;
        $subscription->save();

        alert()->success('Registro existoso', '')->autoClose(10000)->showCloseButton('aria-label');
        
        return back();
    }
}
