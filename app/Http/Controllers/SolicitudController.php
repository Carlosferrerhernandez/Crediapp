<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\User;
use App\Conyuge;
use App\Ubicacion;
use App\Actividad;
use Hash;

class SolicitudController extends Controller
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
        $data = Solicitud::all();

        /*dd($data);*/

        return view('solicitudes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitudes.create');
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
        
        /*
        *   Creacion de usuario
        */

        $user = new User();

        $user->nombres = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->lugar_expedicion = $request->lugar_expedicion;
        $user->fecha_expedicion = $request->fecha_expedicion;
        $user->n_documento = $request->n_documento;
        $user->fecha_expedicion = $request->fecha_expedicion;
        $user->email = $request->email;
        $user->e_civil = $request->e_civil;
        $user->n_celular = $request->n_celular;
        $user->user_name = $request->nombres;
        $user->password = Hash::make($request->n_documento);
        $user->save();

        $conyuge = $user->conyuges()->create([
            'nombres_conyuge' => $request->nombres_conyuge,
            'apellido_conyuge' => $request->apellido_conyuge,
            'documento_conyuge' => $request->documento_conyuge,
            'lugar_conyuge' => $request->lugar_conyuge,
            'nacimiento_conyuge' => $request->nacimiento_conyuge,
            'telefono_conyuge' => $request->telefono_conyuge,

        ]);

        $ubicacion = $user->ubicaciones()->create([
            'ciudad' => $request->ciudad,
            'direccion' => $request->direccion,
            'barrio' => $request->barrio,
            'departamento' => $request->departamento,
            'vivienda' => $request->vivienda,

        ]);

        $actividad = $user->actividades()->create([
            'empresa' => $request->empresa,
            'ocupacion' => $request->ocupacion,
            'cargo' => $request->cargo,
            'telefono_empresa' => $request->telefono_empresa,
            'direcccion_trabajo' => $request->direcccion_trabajo,
            'ciudad_empresa' => $request->ciudad_empresa,
            'actividad_independiente' => $request->actividad_independiente,
            'direccion_independiente' => $request->direccion_independiente,
            'ciudad_independiente' => $request->ciudad_independiente,
            'otra_ocupacion' => $request->otra_ocupacion,

        ]);

        $referencia = $user->referencias()->create([
            'nombre_referencia' => $request->nombre_referencia,
            'direccion_referencia' => $request->direccion_referencia,
            'telefono_referencia' => $request->telefono_referencia,

        ]);
        
        for ($i=0; $i < count ($request->nombre_banco) ; $i++) { 

           $banco = $user->bancos()->createMany([
                [   
                    'nombre_banco' => $request->nombre_banco[$i],
                    'n_cuenta' => $request->n_cuenta[$i],
                    't_cuenta' => $request->t_cuenta[$i],
                ],
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id)->conyuges()->get();

        dd($user);
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
        //
    }
}
